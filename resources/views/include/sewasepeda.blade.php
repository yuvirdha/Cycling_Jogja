
@foreach($sepedas as $s)
<div class="container">
        <div class="row">
            <div class="col-md-4 mb-5">
                <div class="card h-100">
                  <img class="card-img-top" width="150px" src="{{ url('/images/'.$s->gambar_sepeda) }}" alt="Card image cap">
                  <div class="card-body">
                    <h4 class="card-title">Merk Sepeda : {{ $s->jenis}}</h4>
                    <table>
                      <tr>
                        <td>
                         <i class="fas fa-shopping-bag m-auto text primary" style="color:#F38230;"></i>
                       </td>
                       <td>
                        <p class="card-text">Tersisa</p>
                       </td>
                       <td>:</td>
                       <td>
                           <p class="card-text">{{ $s->stock}}</p>
                       </td>
                      </tr>
                      <tr>
                         <td>
                             <i class="fas fa-ticket-alt m-auto text primary" style="color:#F38230;"></i>
                            </td>
                            <td>
                             <p class="card-text">Harga</p>
                            </td>
                            <td>:</td>
                       <td>
                           <p class="card-text">{{ $s->harga}}</p>
                       </td>
                      </tr>
                    </table>
                  </div>
                  <div class="card-footer">
                     <a href="/pemesanansepeda/{{ $s->id}}" class="btn btn-primary" style="background-color:#F38230; border-color:#F38230">Pesan</a>
                  </div>
         
                </div>
              </div>
              @endforeach
           </div>
           </div>
