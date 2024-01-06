<x-layouts.app>
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Products</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item">Product</li>
                    <li class="breadcrumb-item active">Data</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Datatables</h5>
                            <p>Take your time to peruse the list and discover the incredible
                                variety we have to offer. Click on the pagination links at
                                the bottom to navigate through different pages, ensuring you
                                don't miss out on any of our fantastic products.
                            </p>

                            <!-- Table with stripped rows -->
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Price</th>
                                    <th>Category</th>
                                    <th>Is Active</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($products as $item)
                                    <tr>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->description }}</td>
                                        <td>{{ $item->price }}</td>
                                        <td>{{ $item->category->name }}</td>
                                        <td>{{ $item->is_active }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <!-- End Table with stripped rows -->
                            {{ $products->links() }}

                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main><!-- End #main -->
</x-layouts.app>
