<?php
/**
* Interface for common functionality
* Sneha Wakode
*/
interface Crud {
	public function add();
	public function update(int $id);
	public function delete(int $id);
	public function show(int $id = 0);
}