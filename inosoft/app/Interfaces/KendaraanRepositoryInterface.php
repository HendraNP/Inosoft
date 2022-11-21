<?php
namespace App\Interfaces;

interface KendaraanRepositoryInterface{
	public function show($id);

    public function getStok($id);

    public function soldReport();

    public function soldItem(Request $request, $id);
}
?>