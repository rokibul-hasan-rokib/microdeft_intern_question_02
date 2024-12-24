<?php

namespace App\Models;

use Illuminate\Contracts\Pagination\Paginator as PaginationPaginator;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class Requisition extends Model
{
    protected $guraded = [];

    // final public function getAllBenefits(Request $request, array|null $columns = null,): Paginator
    // {
    //     $query = self::query()->with('asset:id,name');

    //     if ($columns) {
    //         $query->select($columns);
    //     }

    //     if ($request->input('name')) {
    //         $query->where('name', 'like', '%' . $request->input('name') . '%');
    //     }
    //     if ($request->input('asset_id')) {
    //         $query->where('asset_id', 'like', '%' . $request->input('asset_id') . '%');
    //     }

    //     if (!empty($request->input('sort_by'))) {
    //         $query->orderBy($request->input('sort_by', 'id'), $request->input('sort_direction', 'asc'));
    //     } else {
    //         $query->orderBy('id', $request->input('sort_direction', 'desc'));
    //     }
    //     $query->orderBy('id', 'desc');
    //     return $query->paginate($request->input(paginate(20)));
    // }


    final public function storeRequisite(Request $request)
    {
        return self::query()->create($this->prepareData($request));

    }
    final public function updateRequisite(Request $request, Requisition $requisition){
        return $requisition->update($this->prepareData($request));
    }

    final public function prepareData(Request $request)
    {
        return [
           "name" => $request->input('name'),
           "phone" => $request->input('phone'),
           "email" => $request->input('email'),
           "asset_id" => $request->input('asset_id'),
           "designation" => $request->input('designation'),
        ];
    }

    final public function deleteRequisite(Requisition $requisition)
    {
        return $requisition->delete();
    }

    public function asset()
    {
        return $this->belongsTo(Asset::class);
    }
}