<?php
    use Illuminate\Support\Facades\DB;

    if(!function_exists('productQuantity'))
    {
        function productQuantity($id)
        {
            $product = DB::table('products')->where('id',$id)->first();
            return $product->stock;
        }
    }

?>
