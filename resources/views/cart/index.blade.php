@extends('/layouts/main')

@push('css-dependencies')
    <link rel="stylesheet" type="text/css" href="/css/product.css" />
@endpush

@push('scripts-dependencies')
    <script src="/js/product.js" type="module"></script>
@endpush

@push('modals-dependencies')
    @include('/partials/product/product_detail_modal')
@endpush

@section('content')
<div class="container mt-5">
    <h1 class="mb-4 text-center">Your Cart</h1>
    @if(session()->has('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
    @endif
    @if(session()->has('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    @if($carts->count() > 0)
        <div class="table-responsive">
            <table class="table table-bordered table-hover align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>Product</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Total</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($carts as $cart)
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('storage/' . $cart->product->image) }}"
                                        alt="{{ $cart->product->product_name }}" class="img-thumbnail me-3"
                                        style="width: 80px; height: 80px; object-fit: cover;">
                                    <div>
                                        <h6 class="mb-0">{{ $cart->product->product_name }}</h6>
                                        <small hidden class="text-muted">ID: {{ $cart->product->id }}</small>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <span>{{ $cart->quantity }}</span>
                                </div>
                            </td>
                            <td>Rp {{ number_format($cart->product->price, 0, ',', '.') }}</td>
                            <td>Rp {{ number_format($cart->product->price * $cart->quantity, 0, ',', '.') }}</td>
                            <td>
                                <form action="{{ route('cart.remove', $cart->id) }}" method="POST" class="d-inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-outline-danger btn-sm" title="Remove from Cart">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="d-flex justify-content-between mt-4">
            <a href="/product" class="btn btn-outline-secondary">
                <i class="fa fa-arrow-left"></i> Continue Shopping
            </a>
            @can('create_order', App\Models\Order::class)
                <a href="/order/make_order/{{ $cart->id }}"><button class="btn btn-primary btn-sm ubah">Process to Checkout</button></a>
            @endcan
        </div>
    @else
        <div class="text-center py-5">
            <h3>Your cart is empty!</h3>
            <p class="text-muted">Browse our products and add items to your cart.</p>
            <a href="/product" class="btn btn-primary">Shop Now</a>
        </div>
    @endif
</div>

@endsection