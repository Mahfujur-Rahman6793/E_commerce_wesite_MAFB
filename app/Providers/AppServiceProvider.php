<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Cart;
use App\Models\Mafb;
use App\Models\Order;
use App\Models\Delivery;
use App\Providers\view;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $cus = Mafb::where('role','customer')->count();
        $order = Cart::where('is_ordered','Y')->where('is_delivered','N')->count();
        $cart = Cart::where('is_ordered','N')->count();
        $delC= Cart::where('is_delivered','Y')->count();
       view()->share('cus', $cus);
       view()->share('order', $order);
       view()->share('cart', $cart);
       view()->share('delC', $delC);

       $delivery = Delivery::all();
       view()->share('delivery', $delivery);

       
    }
}
