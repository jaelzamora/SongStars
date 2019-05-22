<?php
class Songs extends Controller
{
    protected function Index()
    {
        $viewmodel = new SongsModel();
        $this->returnView($viewmodel->Index(), true);
    }
}
