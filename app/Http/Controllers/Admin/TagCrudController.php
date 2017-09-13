<?php namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\TagCrudRequest as StoreRequest;
use App\Http\Requests\TagCrudRequest as UpdateRequest;

class TagCrudController extends CrudController {

  public function setup() {
    $this->crud->setModel("App\Tag");
    $this->crud->setRoute("admin/tag");
    $this->crud->setEntityNameStrings('tag', 'tags');

    $this->crud->setColumns(['name', 'description']);
    $this->crud->addField(
      [
        'name' => 'name',
        'label' => "Tag name",
      ]
    );
    $this->crud->addField(
      [
        'name' => 'description',
        'label' => "Tag description",
      ]
    );
  }

  public function store(StoreRequest $request) {
    return parent::storeCrud();
  }

  public function update(UpdateRequest $request) {
    return parent::updateCrud();
  }
}