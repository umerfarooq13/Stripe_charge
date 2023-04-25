@include('master')
<div class="continer">
<table class="table mt-5">
  <thead class="bg-danger text-white fw-bold">
    <th>ID</th>
    <th>product Name</th>
    <th>product Price</th>
    <!-- <th>product Descripition</th> -->
     <th scope="col">Actions</th>
  </thead>
  <tbody class="text-danger bg-light fs-4">
    @foreach($products as $product)
    <tr>
      <td class="pt-5">{{ $product['id']}}</td>
      <td class="pt-5">{{ $product['name']}}</td>
      <td class="pt-5">{{ $product['price']}}</td>
      <!-- <td class="pt-5 text-center">{{ $product['description']}}</td> -->
      <td class="pt-5">
      <a href="{{ route('orderform', $product->id) }}"class="btn btn-info btn-sm rounded-pill">Buy Now</a>
                          
    </tr>
    @endforeach
  </tbody>
</table>
</div>
