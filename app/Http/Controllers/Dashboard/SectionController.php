<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Repository\Sections\SectionRepositoryInterface;
use Illuminate\Http\Request;

use App\Http\Requests\StoreSectionRequest;

class SectionController extends Controller
{

    private $Sections;

    public function __construct(SectionRepositoryInterface $Sections)
    {
        $this->Sections = $Sections;
    }

    public function index()
    {
      return  $this->Sections->index();

    }

    public function show($id)
    {
       return $this->Sections->show($id);
    }


    public function store(StoreSectionRequest $request)
    {
        return $this->Sections->store($request);
    }


    public function update(StoreSectionRequest $request)
    {
        return $this->Sections->update($request);
    }


    public function destroy(Request $request)
    {
        return $this->Sections->destroy($request);
    }
}