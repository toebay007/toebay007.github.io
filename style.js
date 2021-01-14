
$(document).ready(function(){

    var linkGender = "male";
    var selectedNat = "AU";
    
    var url = "https://randomuser.me/api/?results=3&gender="+linkGender+"&nat="+selectedNat;

    var p = "";

    var u = "";

    
    fetchInfo(url);

    //link button listner
$("input[type='radio']").click(function(){

    $("#resultss").empty();

    linkGender = $("input[name='gender']:checked").val();

    url = "https://randomuser.me/api/?results=3&gender="+linkGender+"&nat="+selectedNat;

    if(linkGender){
        fetchInfo(url);

        $("#Userss").empty();
        u = `${linkGender} Users`
        $("#Userss").append(u);

    }

});

// for nationality
 
$("#nationality").on("change",function(){

//grab the country code

$("#resultss").empty();
 
  selectedNat =  $("#nationality :selected").text();

  url = "https://randomuser.me/api/?results=3&gender="+linkGender+"&nat="+selectedNat;

  fetchInfo(url);

});

    function fetchInfo(url){
        fetch(url)
    .then((response) => (response.json()))
    .then(function(data){

        data.results.forEach(person => {
            
            p = `
            <div class="card">
            <div class="additional">
              <div class="user-card">
                  <div class="col-md-4">
                      <img src="${person.picture.medium}" class="images img-2" alt="${person.name.first} ${person.name.last}">
                    </div>
              </div>
              <div class="more-info">
                
                <div class="card-body">
                  <h5 class="card-title"> ${person.name.title} ${person.name.first} ${person.name.last}<span> ${person.dob.age}</span></h5>
                  <p class="card-text text-muted"> ${person.location.street.number} ${person.location.street.name} ${person.location.city} ${person.location.state}</p>
                  <p class="emails" style="font-size:13px;"> <i class="bi bi-envelope"></i><i> ${person.email}</i> </p>
                  <p class="emails" style="background-color: rgb(236, 169, 180); font-size:13px;"><i style="color:black;"> ${person.registered.date}</i> </p>
                  <p class="card-text"><small class="text-muted"><i class="bi bi-telephone"></i> ${person.phone}</small></p>
                  <span class="card-text"><small class="text-muted"><i class="bi bi-phone"></i> ${person.cell}</small></span> 
                  
                </div>
              </div>
            </div>
            <div class="general">
                <div class="card-body">
                    <h5 class="card-title">${person.name.title} ${person.name.first} ${person.name.last}</h5>
                    <p class="card-text"><i>${person.location.street.number} ${person.location.street.name}, ${person.location.city} ${person.location.state}</i></p>
                    <p class="card-text"><small class="text-muted"><i class="bi bi-envelope"></i> ${person.email}</small></p> 
                    <p class="card-text"><small class="text-muted"><i class="bi bi-telephone"></i> ${person.phone}</small></p>
                </div>
            </div>
          </div>
             
                     `;
                     $("#resultss").append(p);

        });
       
    });
    
};

});
