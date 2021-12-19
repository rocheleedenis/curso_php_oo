<?php

namespace Source;

interface ServiceProductInterface
{
    public function find(int $id);
    public function list();
    public function save();
    public function update();
    public function delete();
}