<?php

namespace Source;

interface ServiceProductInterface
{
    public function list();

    public function save();

    public function update();

    public function delete();
}