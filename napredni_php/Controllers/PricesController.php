<?php

namespace Controllers;

use Core\Database;
use Core\Session;
use Core\Validator;

class PricesController
{
    private $db;

    public function __construct()
    {
        $this->db = Database::get();
    }

    // Prikaz cijena
    public function index()
    {
        $prices = $this->db->query("SELECT * FROM cjenik ORDER BY id")->all();
        $pageTitle = 'Cjenik';
        $message = Session::get('message');
        require base_path('views/prices/index.view.php');
    }

    // Prikaz odabrane cijene
    public function show()
    {
        $price = $this->db->query("SELECT * FROM cjenik WHERE id = :id", ['id' => $_GET['id']])->findOrFail();
        $pageTitle = 'Cijena';
        require base_path('views/prices/show.view.php');
    }

    // Uredi cijenu
    public function edit()
    {
        $price = $this->db->query("SELECT * FROM cjenik WHERE id = :id", ['id' => $_GET['id']])->findOrFail();
        $pageTitle = "Uredi cijenu";
        $errors = Session::get('errors');
        require base_path('views/prices/edit.view.php');
    }

    // Ažuriraj
    public function update()
    {
        if (!isset($_POST['id'])) {
            $this->abort();
        }

        // Validacija ispravnog inputa usera
        $rules = [
            'id' => ['required', 'numeric'],
            'tip_filma' => ['required', 'string', 'max:50', 'min:2'],
            'cijena' => ['required', 'numeric', 'max:5'],
            'zakasnina_po_danu' => ['required', 'numeric', 'max:5']
        ];

        // Validacija ispravnog inputa usera
        $form = new Validator($rules, $_POST);
        if ($form->notValid()) {
            Session::flash('errors', $form->errors());
            $this->goBack();
        }

        $data = $form->getData();

        // Uređivanje cijene u bazi
        $this->db->query("UPDATE cjenik SET tip_filma = :tip_filma, cijena = :cijena, zakasnina_po_danu = :zakasnina_po_danu WHERE id = :id", [
            'tip_filma' => $data['tip_filma'],
            'cijena' => $data['cijena'],
            'zakasnina_po_danu' => $data['zakasnina_po_danu'],
            'id' => $_POST['id']
        ]);

        // Notifikacija success
        Session::flash('message', [
            'type' => 'success',
            'message' => "Cijena uspješno promijenjena"
        ]);
        
        $this->redirect('/prices');
    }

    // Kreiraj novu cijenu
    public function create()
    {
        $pageTitle = 'Nova cijena';
        $errors = Session::get('errors');
        require base_path('views/prices/create.view.php');
    }

    // Spremanje nove cijene
    public function store()
    {
        // Validacija ispravnog inputa usera
        $rules = [
            'tip_filma' => ['required', 'string', 'max:50', 'min:2'],
            'cijena' => ['required', 'numeric', 'max:5'],
            'zakasnina_po_danu' => ['required', 'numeric', 'max:5']
        ];

        // Validacija ispravnog inputa usera
        $form = new Validator($rules, $_POST);
        if ($form->notValid()) {
            Session::flash('errors', $form->errors());
            $this->goBack();
        }

        $data = $form->getData();

        // Provjera duplih unosa cijena/tipa filma
        $exists = $this->db->query("SELECT id FROM cjenik WHERE tip_filma = :tip_filma", ['tip_filma' => $data['tip_filma']])->find();
        if ($exists) {
            die("Tip filma {$data['tip_filma']} već postoji u bazi.");
        }

        // Ubacivanje nove cijene u bazu
        $this->db->query("INSERT INTO cjenik (tip_filma, cijena, zakasnina_po_danu) VALUES (:tip_filma, :cijena, :zakasnina_po_danu)", [
            'tip_filma' => $data['tip_filma'],
            'cijena' => $data['cijena'],
            'zakasnina_po_danu' => $data['zakasnina_po_danu']
        ]);

        // Notifikacija - uspješno
        Session::flash('message', [
            'type' => 'success',
            'message' => "Cijena uspješno kreirana"
        ]);

        $this->redirect('/prices');
    }

    // Brisanje cijene po id-u
    public function destroy()
    {
        if (!isset($_POST['id'])) {
            $this->abort();
        }

        // Naredba brisanja za bazu
        $this->db->query("DELETE FROM cjenik WHERE id = :id", ['id' => $_POST['id']]);

        // Notifikacija - uspjeh
        Session::flash('message', [
            'type' => 'success',
            'message' => "Cijena uspješno obrisana"
        ]);

        $this->redirect('/prices');
    }

    private function abort()
    {
        http_response_code(404);
        die("Page not found");
    }


    private function redirect($url)
    {
        header("Location: $url");
        exit;
    }

    // Redirect natrag nakon izvršavanja
    private function goBack()
    {
        header("Location: " . $_SERVER['HTTP_REFERER']);
        exit;
    }
}
