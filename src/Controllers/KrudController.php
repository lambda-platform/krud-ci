<?php

namespace Krud\Controllers;

use DataGrid\DataGrid;
use Puzzle\Models\UserModel;
use Puzzle\validation\UserRules;
use Lambda\Controllers\BaseController;
use CodeIgniter\HTTP\Response;
use CodeIgniter\HTTP\ResponseInterface;
use DataForm\DataForm;

use Carbon\Carbon;


class KrudController extends BaseController
{

    public function crud($schemaID, $action, $dataID = false)
    {
        return $this->res(DataForm::exec($schemaID, $action, $dataID));
    }
    public function delete($schema, $id)
    {
        if (Datagrid::exec('delete', $schema, $id)) {
            return $this->res(['status' => true]);
        }

        return $this->res(['status' => false]);
    }

}
