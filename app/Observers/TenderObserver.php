<?php
// file app/observers/FooObserver.php
namespace App\Observers;
use Illuminate\Support\Facades\Auth;

use App\Models\Tender;


class TenderObserver {

    public function creating(Tender $model) {
        $this->user_id = Auth::user();
    }
}