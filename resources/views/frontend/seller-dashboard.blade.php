@extends('welcome')
<link rel="stylesheet" href="{{ URL::asset('css/user.css')}}">

@section('content')
    <!-- breadcrumb start -->
    <div class="breadcrumb">
        <div class="container">
            <ul class="list-unstyled d-flex align-items-center m-0">
                <li><a href="index.html">Home</a></li>
                <li>
                    <svg class="icon icon-breadcrumb" width="64" height="64" viewBox="0 0 64 64" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <g opacity="0.4">
                            <path
                                d="M25.9375 8.5625L23.0625 11.4375L43.625 32L23.0625 52.5625L25.9375 55.4375L47.9375 33.4375L49.3125 32L47.9375 30.5625L25.9375 8.5625Z"
                                fill="#000" />
                        </g>
                    </svg>
                </li>
                <li>
                    <svg class="icon icon-breadcrumb" width="64" height="64" viewBox="0 0 64 64" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <g opacity="0.4">
                            <path
                                d="M25.9375 8.5625L23.0625 11.4375L43.625 32L23.0625 52.5625L25.9375 55.4375L47.9375 33.4375L49.3125 32L47.9375 30.5625L25.9375 8.5625Z"
                                fill="#000" />
                        </g>
                    </svg>
                </li>
                <li>Dashboard</li>
            </ul>
        </div>
    </div>
    <section class="profile__menu pb-70 grey-bg pt-70">
        <div class="container">
            <div class="row">
                <div class="col-xxl-4 col-md-4">
                    <div class="profile__menu-left   mb-50">
                        <h3 class="profile__menu-title"><i class="fa fa-list-alt"></i> Your Menu</h3>
                        <div class="profile__menu-tab">
                            <div class="nav nav-tabs flex-column justify-content-start text-start " id="nav-tab" role="tablist">
                                <button class="nav-link active  " id="nav-order-tab" data-toggle="tab" data-target="#nav-order" type="button" role="tab" aria-controls="nav-order" aria-selected="true"> <i class="fa fa-user"></i> Orders</button>
                                <button class="nav-link  " id="nav-product-tab" data-toggle="tab" data-target="#nav-product" type="button" role="tab" aria-controls="nav-product" aria-selected="false"> <i class="fa fa-user"></i> Products</button>
                                <a class="nav-link  " href="#"><i class="fa fa-sign-out"></i> Logout</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-8 col-md-8">
                    <div class="profile__menu-right">
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade active show in" id="nav-order" role="tabpanel" aria-labelledby="nav-order-tab">
                                <div class="profile__info basic-login p-0">
                                    <div class="profile__info-wrapper white-bg">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Product Name</th>
                                                    <th scope="col">Quantity</th>
                                                    <th scope="col">Amount</th>
                                                    <th scope="col">Sub Total</th>
                                                    <th scope="col">Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @forelse ($orders as $item)
                                                    <tr>
                                                        <th scope="row">{{ $item->name }}</th>
                                                        <td>{{ $item->product->name }}</td>
                                                        <td>{{ $item->quantity }}</td>
                                                        <td>{{ $item->amount }}</td>
                                                        <td>{{ $item->sub_total }}</td>
                                                        <td>{{ $item->status }}</td>
                                                    </tr>
                                                @empty
                                                    <tr>
                                                        <th class="text-center" colspan="5">Nothing To Preview</th>
                                                    </tr>
                                                @endforelse
                                
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-product" role="tabpanel" aria-labelledby="nav-product-tab">
                                <div class="profile__info basic-login p-0">
                                    <div class="row">

                                        <button type="button" class="btn btn-primary text-white bg-primary" data-toggle="modal" data-target="#createModal">
                                            Create
                                        </button>
                                    </div>
    
                                    <div class="profile__info-wrapper white-bg">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Product</th>
                                                <th scope="col">Quantity</th>
                                                <th scope="col">Price</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                @forelse ($products as $item)
                                                    <tr>
                                                        <th scope="row">{{$item->id}}</th>
                                                        <td>{{$item->name}}</td>
                                                        <td>{{$item->price}}</td>
                                                        <td>{{$item->quantity}}</td>
                                                        <td>
                                                            <a href="#" type="button" class="editModal btn btn-primary text-white bg-success" 
                                                            data-id="{{$item->id}}"   data-name="{{$item->name}}" data-price="{{$item->price}}" data-quantity="{{$item->quantity}}"
                                                            >Edit</a>
                                                            <form id="deleteForm" action="{{ route('products.destroy', ['id' => $item->id]) }}" method="post">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-danger text-white bg-danger" onclick="confirm('Are You Sure')">Delete</button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                @empty
                                                    <tr>
                                                        <th colspan="5">Nothing To Preview</th>
                                                    </tr>
                                                @endforelse
                                
                                            </tbody>
                                        </table>
                                        {{ $products->links('pagination::bootstrap-4') }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- Create Modal -->
<div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="createModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createModalLabel">Add Product</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="productForm" action="{{ route('products.store')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="price">Price:</label>
                        <input type="number" class="form-control" id="price" name="price" required>
                    </div>
                    <div class="form-group">
                        <label for="price">Quantity:</label>
                        <input type="number" class="form-control" id="quantity" name="quantity" required>
                    </div>
                    <div class="form-group">
                        <label for="editDescription">Description:</label>
                        <textarea class="form-control" id="description" name="description" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary text-white bg-primary">Save Product</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Edit Modal -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Edit Product</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Form inside the edit modal -->
                <form action="{{ route('products.update')}}" method="POST" id="editProductForm" >
                    @csrf
                    <input type="hidden" class="form-control" id="editId" name="id" required>
                    <div class="form-group">
                        <label for="editName">Name:</label>
                        <input type="text" class="form-control" id="editName" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="editPrice">Price:</label>
                        <input type="number" class="form-control" id="editPrice" name="price" required>
                    </div>
                    <div class="form-group">
                        <label for="editDescription">Quantity:</label>
                        <input type="number" class="form-control" id="editQuantity" name="quantity" required>
                    </div>
                    <button type="submit" class="btn btn-primary bg-primary text-white">Update Product</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script>
    // $(document).ready(function () {
        $('.editModal').click(function () {

            var name = $(this).data('name');
            var price = $(this).data('price');
            var quantity = $(this).data('quantity');
            var productId = $(this).data('id');

            $('#editName').val(name);
            $('#editPrice').val(price);
            $('#editQuantity').val(quantity);
            $('#editId').val(productId);
            $('#editModal').modal('show');
        });
    // });
</script>
@endsection
