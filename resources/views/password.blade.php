@extends('layout.layout')

@section('content')
    
@endsection
        <div class="container">
            <div class="row">
                <div class="col-4">
                <img src="img/021-deadline-3.png" class="img-fluid center-icon mr-2"/><b>Profile</b>
                </div>
                <div class="col-7 border-bottom text-left">
                <a href="index5.php" class="text-dark"><span class="mr-3"><img src="img/004-assistance.png" class="img-fluid center-icon"/>Akun</span></a>
                <a href="index6.php" class="text-dark"><span class="mr-3"><img src="img/008-id-card.png" class="img-fluid center-icon"/>Edit Profil</span></a>
                <a href="index7.php" class="text-dark"><span><img src="img/016-smartphone.png" class="img-fluid center-icon"/>Ganti Password</span></a>
                </div>
                <div class="col-1"></div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="card col-3  bg-white rounded-lg mt-4 shadow">
                    <div class="text-center p-3"><br>
                        <img src="img/girl (1).png" class="img-fluid large-icon rounded-circle mt-5" /><br>
                        <b class="mt-2">Admin</b>
                        <div class="text-secondary">PT SETIA KARYA</div>
                    </div>
                </div>
                <div class="col-1"></div>
                <div class="col-7  card bg-white shadow-sm rounded-lg mt-4 p-3 mb-4">
                <form action="" class="">
                <div class="row">
                    <div class="col-12">
                        <div class="border-bottom medium-font-size"><b>Perbarui Password</b></div>
                        <div class="form-group mt-3">
                            <label>Password Lama</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                </div>

                    <div class="row">
                        <div class="col">
                        <div class="form-group">
                            <label>Password Baru</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                        <div class="col">
                        <div class="form-group">
                            <label>Ulang Password Baru</label>
                            <input type="text" class="form-control">
                        </div>
                        </div>
                    </div>
                            <div class="form-group text-right pt-1">
                                <button class="btn btn-primary rounded-pill pr-5 pl-5">PERBARUI</button>
                            </div>
                    </div>
                </div>
            </div>


                    
 </div>

                </div>

            </div>
                                    
                </form>
                </div>
            </div>
        </div>
                        
                                <!-- tutup search -->
                            


        <footer class="sticky-footer bg-primary">
            
        </footer>

    </div>
  

  </div>
  
  

</body>

<script src="js/jquery/jquery.min.js"></script>
<script src="js/sb-admin.min.js"></script>


</html>
