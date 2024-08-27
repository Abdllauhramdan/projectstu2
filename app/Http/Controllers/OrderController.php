<?php

// namespace App\Http\Controllers;

// use App\Http\Requests\StoreOrderRequest;
// use App\Http\Requests\UpdateOrderRequest;
// use App\Http\Traits\ApiResponseTrait;
// use App\Models\Order;
// use Illuminate\Support\Facades\Log;

// class OrderController extends Controller
// {
//     use ApiResponseTrait;

//     /**
//      * Display a listing of the orders.
//      */
//     public function index()
//     {
//         try {
//             $orders = Order::all();
//             return $this->customeResponse($orders, "Orders retrieved successfully", 200);
//         } catch (\Throwable $th) {
//             Log::error($th);
//             return $this->customeResponse(null, "Error retrieving orders", 500);
//         }
//     }

//     /**
//      * Store a newly created order in storage.
//      */
//     public function store(StoreOrderRequest $request)
//     {
//         try {
//             $order = Order::create($request->validated());
//             return $this->customeResponse($order, 'Order created successfully', 201);
//         } catch (\Throwable $th) {
//             Log::error($th);
//             return $this->customeResponse(null, "Error creating order", 500);
//         }
//     }

//     /**
//      * Display the specified order.
//      */
//     public function show(Order $order)
//     {
//         try {
//             return $this->customeResponse($order, 'Order retrieved successfully', 200);
//         } catch (\Throwable $th) {
//             Log::error($th);
//             return $this->customeResponse(null, "Error retrieving order", 500);
//         }
//     }

//     /**
//      * Update the specified order in storage.
//      */
//     public function update(UpdateOrderRequest $request, Order $order)
//     {
//         try {
//             $order->update($request->validated());
//             return $this->customeResponse($order, 'Order updated successfully', 200);
//         } catch (\Throwable $th) {
//             Log::error($th);
//             return $this->customeResponse(null, "Error updating order", 500);
//         }
//     }

//     /**
//      * Remove the specified order from storage.
//      */
//     public function destroy(Order $order)
//     {
//         try {
//             $order->delete();
//             return $this->customeResponse(null, 'Order deleted successfully', 200);
//         } catch (\Throwable $th) {
//             Log::error($th);
//             return $this->customeResponse(null, "Error deleting order", 500);
//         }
//     }
// }


// namespace App\Http\Controllers;

// use App\Http\Requests\StoreOrderRequest;
// use App\Http\Requests\UpdateOrderRequest;
// use App\Http\Traits\ApiResponseTrait;
// use App\Models\Order;
// use Illuminate\Support\Facades\Log;
// use Illuminate\Http\Request;

// class OrderController extends Controller
// {
//     use ApiResponseTrait;

//     /**
//      * Display a listing of the orders.
//      */
//     public function index()
//     {
//         try {
//             $orders = Order::all();
//             return $this->customeResponse($orders, "Orders retrieved successfully", 200);
//         } catch (\Throwable $th) {
//             Log::error('Error retrieving orders: ' . $th->getMessage());
//             return $this->customeResponse(null, "Error retrieving orders", 500);
//         }
//     }

//     /**
//      * Store a newly created order in storage.
//      */
//     public function store(StoreOrderRequest $request)
//     {
//         try {
//             $order = Order::create($request->validated());
//             return $this->customeResponse($order, 'Order created successfully', 201);
//         } catch (\Throwable $th) {
//             Log::error('Error creating order: ' . $th->getMessage());
//             return $this->customeResponse(null, "Error creating order", 500);
//         }
//     }

//     /**
//      * Display the specified order.
//      */
//     public function show(Order $order)
//     {
//         try {
//             return $this->customeResponse($order, 'Order retrieved successfully', 200);
//         } catch (\Throwable $th) {
//             Log::error('Error retrieving order: ' . $th->getMessage());
//             return $this->customeResponse(null, "Error retrieving order", 500);
//         }
//     }

//     /**
//      * Update the specified order in storage.
//      */
//     public function update(UpdateOrderRequest $request, Order $order)
//     {
//         try {
//             $order->update($request->validated());
//             return $this->customeResponse($order, 'Order updated successfully', 200);
//         } catch (\Throwable $th) {
//             Log::error('Error updating order: ' . $th->getMessage());
//             return $this->customeResponse(null, "Error updating order", 500);
//         }
//     }

//     /**
//      * Remove the specified order from storage.
//      */
//     public function destroy(Order $order)
//     {
//         try {
//             $order->delete();
//             return $this->customeResponse(null, 'Order deleted successfully', 200);
//         } catch (\Throwable $th) {
//             Log::error('Error deleting order: ' . $th->getMessage());
//             return $this->customeResponse(null, "Error deleting order", 500);
//         }
//     }
// }
// namespace App\Http\Controllers;

// use App\Http\Requests\StoreOrderRequest;
// use App\Http\Requests\UpdateOrderRequest;
// use App\Http\Traits\ApiResponseTrait;
// use App\Models\Order;
// use Illuminate\Support\Facades\Log;
// use Illuminate\Http\Request;

// class OrderController extends Controller
// {
//     use ApiResponseTrait;

//     /**
//      * Display a listing of the orders.
//      */
//     public function index()
//     {
//         try {
//             $orders = Order::all();
//             return $this->customeResponse($orders, "Orders retrieved successfully", 200);
//         } catch (\Throwable $th) {
//             Log::error('Error retrieving orders: ' . $th->getMessage());
//             return $this->customeResponse(null, "Error retrieving orders", 500);
//         }
//     }

//     /**
//      * Store a newly created order in storage.
//      */
//     public function store(StoreOrderRequest $request)
//     {
//         try {
//             $order = Order::create($request->validated());
//             return $this->customeResponse($order, 'Order created successfully', 201);
//         } catch (\Throwable $th) {
//             Log::error('Error creating order: ' . $th->getMessage());
//             return $this->customeResponse(null, "Error creating order", 500);
//         }
//     }

//     /**
//      * Display the specified order.
//      */
//     public function show($id)
//     {
//         try {
//             $order = Order::where('order_id', $id)->firstOrFail();
//             return $this->customeResponse($order, 'Order retrieved successfully', 200);
//         } catch (\Throwable $th) {
//             Log::error('Error retrieving order: ' . $th->getMessage());
//             return $this->customeResponse(null, "Error retrieving order", 500);
//         }
//     }

//     /**
//      * Update the specified order in storage.
//      */
//     public function update(UpdateOrderRequest $request, $id)
//     {
//         try {
//             $order = Order::where('order_id', $id)->firstOrFail();
//             $order->update($request->validated());
//             return $this->customeResponse($order, 'Order updated successfully', 200);
//         } catch (\Throwable $th) {
//             Log::error('Error updating order: ' . $th->getMessage());
//             return $this->customeResponse(null, "Error updating order", 500);
//         }
//     }

//     /**
//      * Remove the specified order from storage.
//      */
//     public function destroy($id)
//     {
//         try {
//             $order = Order::where('order_id', $id)->firstOrFail();
//             $order->delete();
//             return $this->customeResponse(null, 'Order deleted successfully', 200);
//         } catch (\Throwable $th) {
//             Log::error('Error deleting order: ' . $th->getMessage());
//             return $this->customeResponse(null, "Error deleting order", 500);
//         }
//     }
// }

namespace App\Http\Controllers;

use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use App\Http\Traits\ApiResponseTrait;
use App\Models\Order;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    use ApiResponseTrait;

    /**
     * Display a listing of the orders.
     */
    public function index()
    {
        try {
            $orders = Order::all();
            return $this->customeResponse($orders, "Orders retrieved successfully", 200);
        } catch (\Throwable $th) {
            Log::error('Error retrieving orders: ' . $th->getMessage());
            return $this->customeResponse(null, "Error retrieving orders", 500);
        }
    }

    /**
     * Store a newly created order in storage.
     */
    public function store(StoreOrderRequest $request)
    {
        try {
            $order = Order::create($request->validated());
            return $this->customeResponse($order, 'Order created successfully', 201);
        } catch (\Throwable $th) {
            Log::error('Error creating order: ' . $th->getMessage());
            return $this->customeResponse(null, "Error creating order", 500);
        }
    }

    /**
     * Display the specified order.
     */
    public function show($order_id)
    {
        try {
            $order = Order::where('order_id', $order_id)->firstOrFail();
            return $this->customeResponse($order, 'Order retrieved successfully', 200);
        } catch (\Throwable $th) {
            Log::error('Error retrieving order: ' . $th->getMessage());
            return $this->customeResponse(null, "Error retrieving order", 500);
        }
    }

    /**
     * Update the specified order in storage.
     */
    public function update(UpdateOrderRequest $request, $order_id)
    {
        try {
            $order = Order::where('order_id', $order_id)->firstOrFail();
            $order->update($request->validated());
            return $this->customeResponse($order, 'Order updated successfully', 200);
        } catch (\Throwable $th) {
            Log::error('Error updating order: ' . $th->getMessage());
            return $this->customeResponse(null, "Error updating order", 500);
        }
    }

    /**
     * Remove the specified order from storage.
     */
    public function destroy($order_id)
    {
        try {
            $order = Order::where('order_id', $order_id)->firstOrFail();
            $order->delete();
            return $this->customeResponse(null, 'Order deleted successfully', 200);
        } catch (\Throwable $th) {
            Log::error('Error deleting order: ' . $th->getMessage());
            return $this->customeResponse(null, "Error deleting order", 500);
        }
    }
}
