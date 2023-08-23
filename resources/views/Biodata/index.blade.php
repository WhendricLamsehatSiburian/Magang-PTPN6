<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Infromasi</title>
        <!-- My CSS -->
        <link rel="stylesheet" href="css/informasi.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
</head>
<body>
    

    <div class="container rounded bg-white mt-5 mb-5">
        <div class="text-right"  >
            <form action="/logout" method="post">
                @csrf
                <button type="submit" class="bg-danger text-white" ">Logout</button>
                </form>
            </div>
        <div class="row">
            <div class="col-md-3 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span class="font-weight-bold">{{ auth() -> user()->nama}}</span><span class="text-black-50">{{ auth() -> user()->email}}</span><span> </span></div>
            </div>
            <div class="col-md-5 border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Profile</h4>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-6"><label class="labels">Name</label><input type="text" class="form-control" disabled value="{{ auth() -> user()->nama}}"></div>
                        <div class="col-md-6"><label class="labels">Username</label><input type="text" class="form-control" disabled value="{{ auth() -> user()->username}}" ></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12"><label class="labels">Perso.No.</label><input type="text" class="form-control" disabled value="{{ auth() -> user()->persno}}"></div>
                        <div class="col-md-12"><label class="labels">Personel Area</label><input type="text" class="form-control" disabled value="{{ auth() -> user()->personel}}"></div>
                      
                        <div class="col-md-12"><label class="labels">Org. Unit</label><input type="text" class="form-control" disabled value="{{ auth() -> user()->orgunit}}"></div>
                        <div class="col-md-12"><label class="labels">Organizational Unit</label><input type="text" class="form-control" disabled value="{{ auth() -> user()->organization}}"></div>
                        <div class="col-md-12"><label class="labels">Position</label><input type="text" class="form-control" disabled value="{{ auth() -> user()->position2}}"></div>
                        <div class="col-md-12"><label class="labels">Cost Center</label><input type="text" class="form-control" disabled value="{{ auth() -> user()->costcenter}}"></div>
                        <div class="col-md-12"><label class="labels">Cost Ctr</label><input type="text" class="form-control" disabled value="{{ auth() -> user()->costctr}}"></div>
                        <div class="col-md-12"><label class="labels">Employee Subgroup</label><input type="text" class="form-control" disabled  value="{{ auth() -> user()->employee}}"></div>
                        <div class="col-md-12"><label class="labels">Birthday Place</label><input type="text" class="form-control" disabled  value="{{ auth() -> user()->birthdayplace}}"></div>
                        <div class="col-md-12"><label class="labels">Birthday Date</label><input type="text" class="form-control" disabled  value="{{ auth() -> user()->birthdaydate}}"></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6"><label class="labels">Country</label><input type="text" class="form-control" placeholder="country" value=""></div>
                        <div class="col-md-6"><label class="labels">State/Region</label><input type="text" class="form-control" value="" placeholder="state"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center experience"><span>Pendidikan</span><span class="border px-3 p-1 add-experience"><i class="fa fa-plus"></i>&nbsp;Experience</span></div><br>
                    <div class="col-md-12"><label class="labels">Educational establishment</label><input type="text" class="form-control" disabled value="{{ auth() -> user()->educationalestablishment}}"></div> <br>
                    <div class="col-md-12"><label class="labels">Institute/locatio</label><input type="text" class="form-control" disabled value="{{ auth() -> user()->institue}}"></div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>

</body>
</html>