<?php
namespace App\Repositories;


abstract class BaseRepository {

    public $model;
    /**
     * destroy a model.
     * @param $id
     */
    public function destroy($id)
    {
        $this->getById($id)->delete();
    }

    /**
     * get model by id.
     * @param $id
     * @return mixed
     */
    public function getById($id)
    {
        return $this->model->findOrFail($id);
    }
}