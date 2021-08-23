<?php
namespace App\Helpers;

use App\Models\Info\Contacts;

use App\Models\Info\CopyWrite;

class Footer
{
    public static function Contacts()
    {
        $contacts = Contacts::paginate(1);
        if (count($contacts) > 0) {
            echo '<div class="text label">KONTAKTS</div>';
            foreach ($contacts as $contact) {
                echo '<div class="text label">'.$contact->name.'</div>';
                echo '<ul>';
                echo '<li><a href="'.$contact->city_link.'" class="text">'.$contact->city.'</a></li>';
                echo '<li><a href="'.$contact->adress_link.'" class="text">'.$contact->adress.'</a></li>';
                echo '<li><a href="tel:'.$contact->phone.'" class="text">'.$contact->phone.'</a></li>';
                echo '<li><a href="mailto:'.$contact->email.'" class="text">'.$contact->email.'</a></li>';
                echo '</ul>';
            }
        }
    }

    public static function CopyWrite($id)
    {
        $copywrite = CopyWrite::find($id);        
        if ($copywrite != null) {
            echo '<div class="col-12"><div class="rights">';
            echo  '<div class="text">'.$copywrite->about.'</div>';
            echo '</div></div>';
        }
    }
}