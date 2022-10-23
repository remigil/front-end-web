<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Tracking</title>
  </head>
  <body>
    <h1>Tracking</h1>
    <button onclick="tracking()">Catch ME!</button>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Latitude</th>
            <th scope="col">Longitude</th>
            <th scope="col">Username</th>
          </tr>
        </thead>
        <tbody id="dataLat">
          
          
        </tbody>
      </table>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="https://cdn.socket.io/4.5.3/socket.io.min.js" ></script>
    <script>
        
        let data = [];
        // var socket = io.connect("http://103.158.196.31/",{
        //     path: "/tracking-service/socket.io",
        //     withCredentials: true,
        //     forceNew: true 
        // });
        //  var socket = io("http://localhost:47014/", {
        //     transports: ['websocket']
        //  });
        var socket = io('http://103.163.139.100:3005/', {
        //     transports: ['websocket'],
        // secure: false,
        // // // transports: ['polling'],
        // // allowEIO3: true,
        // path:'/socket.io',
        query: {
        
            username: "Kakor",
            password: "a",
            
            type: "Admin"
        }
    });
    socket.on("connected", function(resSocket){
            console.log(socket.id);
            console.log(resSocket);
            console.log('ido1');
        });
            socket.on("sendToAdminMobile", function(resSocket){
            // console.log(socket.id);
            // console.log(resSocket);
            console.log('sendToAdminMobile');
        });
            socket.on("from server", function(resSocket){
            // console.log(socket.id);
            console.log(resSocket);
            console.log('from server');
        });
        $('document').ready(function() {
            let no = 1

        socket.on("connected", function(resSocket){
            console.log(socket.id);
            console.log(resSocket);
            console.log('ido1');
        });
            socket.on("sendToAdminMobile", function(resSocket){
            // console.log(socket.id);
            // console.log(resSocket);
            console.log(resSocket);
            console.log('sendToAdminMobile');
            $("#dataLat").append(`
                <tr>
                <th scope="row">${no}</th>
               
              </tr>
                `)
        });
            socket.on("from server", function(resSocket){
            // console.log(socket.id);
            console.log(resSocket);

            console.log('from server');
        });
            // socket.on('webscout', function(DataChat) {
            //     console.log(DataChat)
            //     $("#dataLat").append(`
            //     <tr>
            //     <th scope="row">${no}</th>
               
            //   </tr>
            //     `)
            //     no=no+1
            // })
        })
        // function tracking() {
        //   socket.emit('scout',{
        //     latitude: -6.6078982,
        //     longitude: 106.7660489,
        //     userName: 'Super Admins',
        //     id_user: 34,
        //     company_id: '004c8f37312ed2f6587646bd72ae85b2',
        //     date: new Date()
        //   })
        // }
        //  var socket = io("http://localhost:8450/", {
        //     transports: ['websocket']
        //  });
      </script>
    
  </body>
</html>
