<?php
namespace App\Http\ViewComposer;

use Illuminate\View\View;
use App\Models\Currency;

class CurrencyComposer
{
    protected $currencies;

    public function __construct()
    {
        $this->currencies = Currency::all();
    }

    public function compose(View $view)
    {
        return $view->with('currencies', $this->currencies);
    }
}