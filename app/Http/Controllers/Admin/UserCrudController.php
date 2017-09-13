<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Http\Requests\CrudRequest;
use Backpack\PermissionManager\app\Http\Requests\UserStoreCrudRequest as StoreRequest;
use Backpack\PermissionManager\app\Http\Requests\UserUpdateCrudRequest as UpdateRequest;

class UserCrudController extends \Backpack\PermissionManager\app\Http\Controllers\UserCrudController {

  public function setup() {
    parent::setup();

    $this->crud->setColumns([
      [
        'name' => 'firstname',
        'label' => trans('backpack::permissionmanager.firstname'),
        'type' => 'text',
      ],
      [
        'name' => 'lastname',
        'label' => trans('backpack::permissionmanager.firstname'),
        'type' => 'text',
      ],
    ]);
    $this->crud->addField([
      'name' => 'firstname',
      'label' => trans('backpack::permissionmanager.firstname'),
      'type' => 'text',
    ]);
    $this->crud->addField([
      'name' => 'lastname',
      'label' => trans('backpack::permissionmanager.lastname'),
      'type' => 'text',
    ]);
  }

}
