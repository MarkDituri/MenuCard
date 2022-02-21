

$(document).ready(function () {
    $('.btn-category').click(function () {
        $('.btn-category').removeClass("active");
        $(this).addClass("active");
    });
});

function abrirCategory(id_category) {

    let divLoading = document.querySelector("#divLoading");
    const BASE_URL = "http://localhost/menues/start/Recursos/MenuCard";
    let request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
    let ajaxUrl = base_url + '/Product/getProduct/' + id_category;
    request.open("GET", ajaxUrl, true);
    request.send();
    request.onreadystatechange = function () {
        if (request.readyState == 4 && request.status == 200) {
            let objData = JSON.parse(request.responseText);
            if (objData.status) {
                Obj = objData.data;
                var json2 = JSON.stringify(Obj);

                data = JSON.parse(json2);
                console.log(data);

                let viewProduct = '';

                for (var i = 0; i < data.length; i++) {
                    var nombre = data[i].name;
                    var description = data[i].description;
                    var url_img = data[i].url_img;

                    viewProduct += `<div class='post post-list-sm circle'>
                        <div class='thumb circle'>
                            <a href='blog-single.html'>
                                <div id='url_img' class='inner'>
                                    <img src='`+ base_url + `/Assets/images/products/` + url_img + `' alt='post-title'/>
                                </div>
                            </a>
                        </div>
                        <div class='details clearfix'>
                            <h6 id='title_product' class='post-title my-0'><a href='blog-single.html'>${nombre}</a></h6>
                            <ul class='meta list-inline mt-1 mb-0'>
                                <li id='description_product' class='list-inline-item'>${description}</li>
                            </ul>
                        </div>
                    </div>`
                }

                document.querySelector('#cont-products').innerHTML = viewProduct;

            } else {
                alert("Error");
            }
        }
    }

}