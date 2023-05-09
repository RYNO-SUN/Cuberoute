@foreach ($showcategories as $showcategory) 
                   @foreach($showcategory->Products as $product)
                  <tr>
                
                    <td>{{$product->Product}}</td>
                    <td>{{$showcategory->Product_name}}</td>
                    <td>{{$product->product}}</td>
                    <td>{{$showcategory->category_id}}</td>
                    
                   
                  </tr>
                   @endforeach
                  @endforeach