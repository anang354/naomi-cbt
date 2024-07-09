$(document).ready(function() {
    $('#tab li').on('click', function(e) {
        e.preventDefault();
        if(!$(this).find('a').hasClass('active-tab')) {
            $('#tab li a').removeClass('active-tab');
            $(this).find('a').addClass('active-tab');
        }
        let linkTab = $(this).attr('data-target');
        $('.tab-content').hide();
        $(`[data-content=${linkTab}]`).toggle();
        linkedList();
    });
    
    linkedList();
    
});
	
    
    var fieldLinks;
	var inputOri;
    function linkedList() {
        inputOri = {
                "localization": {
                },
                "options": {
                    "associationMode": "manyToMany", // oneToOne,manyToMany
                    "lineStyle": "square-ends",
                    "buttonErase": "Erase Links",
                    "displayMode": "original",
                    "whiteSpace": "normal", //normal,nowrap,pre,pre-wrap,pre-line,break-spaces default => nowrap
                    "mobileClickIt": true,
                    "effectHover": "on",
                    "lineColor": "yellow"
                },
                "Lists": [
                    {
                        "name": "left",
                        "list": [
                            "firstName",
                            "lastName",
                            "phone",
                            "email",
                        ]
                    },
                    {
                        "name": "right",
                        "list": [
                            "Company",
                            "jobTitle",
                            "adress",
                            "adress",
                            "Mobil"
                        ]
                    }
                ],
                "existingLinks": [],
            };
    

            $(".fieldLinkerSave").on("click",function(){
                var results = fieldLinks.fieldsLinker("getLinks");
                $("#output").html("output => " + JSON.stringify(results));
            });


            fieldLinks=$("#original").fieldsLinker("init",inputOri);
    }
		
    $("input[name='associationMode']").on("click", function () {
        let choice = $(this).val();
        fieldLinks.fieldsLinker("changeParameters",{"associationMode":choice});
    });
    
    $("input[name='enable']").on("click", function () {
        let choice = $(this).val();
        
        fieldLinks.fieldsLinker(choice);
    });		
    
    
    $("input[name='mobileClickIt']").on("click", function () {
        let isCheck = $(this).prop("checked");
        if(isCheck)
            $(this).addClass("active");
        else
            $(this).removeClass("active");
        
        $("#original").html="";
        inputOri.options.mobileClickIt = isCheck;
        fieldLinks=$("#original").fieldsLinker("init",inputOri);

    });