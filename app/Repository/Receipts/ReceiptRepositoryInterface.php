<?php


namespace App\Repository\Receipts;


interface ReceiptRepositoryInterface
{
    // get All Receipt
    public function index();

    // show form add
    public function create();

   // Print Recepit 
   public function show($id); 

    // store Receipt
    public function store($request);

    // edit Receipt
    public function edit($id);

    // Update Receipt
    public function update($request);

    // destroy Receipt
    public function destroy($request);
}