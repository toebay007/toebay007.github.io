
$(document).ready(function(){

    $("#btnss").click(function(){
        $(".hiddens").show();
        $(".shows").hide();
    });

    $("#classess").click(function(){
        $(".shows").show();
        $(".hiddens").hide();
    });

    var url = "https://randomuser.me/api/?results=5&gender=female&nat=AU";

    var p = "";

    
    fetchInfo(url);

    function fetchInfo(url){
        fetch(url)
    .then((response) => (response.json()))
    .then(function(data){

        data.results.forEach(person => {
            
            p = `
             <div class="card mb-3 shows" id="shows" style="max-width: 540px;">
                            <div class="row g-0">
                              <div class="col-md-4">
                                <img src="${person.picture.medium}" class="images" alt="images">
                              </div>
                              <div class="col-md-8">
                                <div class="card-body">
                                  <h5 class="card-title">${person.name.title} ${person.name.first} ${person.name.last}</h5>
                                  <p class="card-text"><i>${person.location.street.number} ${person.location.street.name}</i></p>
                                  <span class="card-text"><small class="text-muted"><i class="bi bi-envelope"></i> ${person.email}</small></span> 
                                  <span class="card-text"><small class="text-muted"><i class="bi bi-telephone"></i> ${person.phone}</small></span>
                                <span class="card-text btnss" id="btnss"><button class="btns" style="background-color: rgb(48,187,181);"><i class="bi bi-arrow-right"></i></button></span>
                                </div>
                              </div>
                            </div>
                        </div>

                        <div class="card mb-3 hiddens" style="max-width: 540px;">
                            <span class="text-muted"><i class="bi bi-arrow-left classess" id="classess" style="color: rgb(48,187,181); font-size: 20px;"></i> Results</span>
                            <div class="row g-0">
                              <div class="col-md-4">
                                <img src="${person.picture.medium}" class="images" alt="images">
                              </div>
                              <div class="col-md-8">
                                <div class="card-body">
                                  <h5 class="card-title">${person.name.title} ${person.name.first} ${person.name.last}<span> ${person.dob.age}</span></h5>
                                  <p class="card-text text-muted">${person.location.street.number} ${person.location.street.name}</p>
                                  <p class="emails" style="font-size:13px;"> <i class="bi bi-envelope"></i><i>${person.email}</i> </p>
                                  <p class="emails" style="background-color: rgb(236, 169, 180); font-size:13px;"><i style="color:black;"> ${person.registered.date}</i> </p>
                                  <p class="card-text"><small class="text-muted"><i class="bi bi-telephone"></i> ${person.phone}</small></p>
                                  <span class="card-text"><small class="text-muted"><i class="bi bi-phone"></i> ${person.cell}</small></span> 
                                  
                                </div>
                              </div>
                            </div>
                        </div>
                     `;
                     $("#resultss").append(p);
                     $("#resulties").append(p);

        });

    });
    }
});