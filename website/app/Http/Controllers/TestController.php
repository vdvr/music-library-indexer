<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Contracts\AlbumRepository;


class TestController extends Controller
{
    /**
     * 
     * @var AlbumRepository
     */
    private $albumModel;
    
    public function __construct(AlbumRepository $albumModel) {
        $this->albumModel = $albumModel;
    }
    
    public function testDetails() {
        $aTestVals = array();
        
        $aTestVals[] = $this->albumModel->getAlbumDetails(1);                                   //album bestaat
        $aTestVals[] = $this->albumModel->getAlbumDetails(50);                                  //album bestaat niet
        
        $aTestVals[] = $this->albumModel->getAlbumPersonalDetails(1, 'saleem_willy');           //combinatie bestaat
        $aTestVals[] = $this->albumModel->getAlbumPersonalDetails(50, 'saleem_willy');          //combinatie bestaat niet (album)
        $aTestVals[] = $this->albumModel->getAlbumPersonalDetails(2, 'bestaat_niet');           //combinatie bestaat niet (gebruiker)
        
        $aTestVals[] = $this->albumModel->getSongs(3);                                          //album bestaat
        $aTestVals[] = $this->albumModel->getSongs(50);                                         //album bestaat niet
        
        $aTestVals[] = $this->albumModel->updateAlbumPersonalDetails(1, 'saleem_willy', array('rating' => 2));
        
        return view('test', ['tests' => $aTestVals]);
    }
}
