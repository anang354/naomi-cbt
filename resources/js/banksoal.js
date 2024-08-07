$(document).ready(() => {
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
    const selectedTampilan = $("input[name='tampilanMode']:checked");
    if(selectedTampilan.val() == 'table'){
        $('#table-ori').show();
        $('#original').hide();
    }else{ 
        $('#table-ori').hide();
        $('#original').show();
    }
    
});

function addColumn(){

    //$('#addColumn').on("click", function() {
        const type =$("input[name='associationMode']:checked").val() == 'manyToMany' ? 'checkbox' : 'radio';
        const headers = $('th');
        let no = 0;        
        $('#editable-jd').find('tr').each(function() {
            var tds = ` <th class="p-2 border border-gray-700 relative">
                        <span class="editable">Kolom ${headers.length}</span>
                        <span class="font-semibold absolute right-4 cursor-pointer del-col">x</span>
                    </th>`;
            var tdr = `<td class="p-2 border border-gray-700 ">
                            <div class="w-full flex items-center justify-center">
                                <input type="${type}" name="check${no}" class="w-6 h-6 check"/>
                            </div>
                        </td>`;
            $(this).find('th').eq(-1).after(tds);
            $(this).find('td').eq(-1).after(tdr);
            no++;
        });
        $('#editable-jd').find('.editable').attr('contentEditable', true);
    //});

   $('th').on('click', '.del-col', function() {
        let cell = $(this).closest('th'), index = cell.index() + 1;
        cell.closest('table')
        .find('th, td')
        .filter(':nth-child(' + index + ')')
        .remove();
   });

}

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
                },
                "Lists": [
                    {
                        "name": "left",
                        "list": data.jawaban[0]
                    },
                    {
                        "name": "right",
                        "list": data.jawaban[1]
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
        if($(this).val() == 'oneToOne') {
            $('.check').attr('type', 'radio')
        } else {
            $('.check').attr('type', 'checkbox')
        }
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

    $("input[name='tampilanMode']").on("click", function () {
        let valCheck = $(this).val();
        if(valCheck == 'table'){
            $('#table-ori').show();
            $('#original').hide();
        }else{ 
            $('#table-ori').hide();
            $('#original').show();
        }
        listToTable();
    });

    function listToTable(array) {
        const output = fieldLinks.fieldsLinker("getLinks");
        const links = output.links;
        const col = links[0];
    }
    
    
        $('#addRow').on("click", function() {
            const type =$("input[name='associationMode']:checked").val() == 'manyToMany' ? 'checkbox' : 'radio';
            const rows = $('tr');
            const col = $('th');
            var tds = '';
            const countCol = col.length;
            const bodyTarget = $('#editable-jd');
            for(let i = 0; i < countCol - 1; i++){
                tds += `<td class="p-2 border border-gray-700 ">
                                <div class="w-full flex items-center justify-center">
                                    <input type="${type}" name="check${rows.length}" class="w-6 h-6 check"/>
                                </div>
                            </td>`;
            }
            const elementRow = `<tr class="text-center border border-gray-700">
                            <td class="p-2 border border-gray-700 relative">
                                <span class="editable" contenteditable>Baris ${rows.length}</span>
                                <span class="font-semibold absolute right-4 cursor-pointer">x</span>
                            </td>
                            ${tds}
                        </tr>`;
            bodyTarget.append(elementRow);
        });

        $('.del-row').on('click', function() {
            $(this).closest('tr').remove();
        });

    
    
    

    const data = {
        jawaban: [
            [
                'Baris 1',
                'Baris 2',
                'Baris 3',
            ],
            [
                'Kolom 1',
                'Kolom 2'
            ]
        ]
    };
    const jawabanArray = data.jawaban;

    const type =$("input[name='associationMode']:checked").val() == 'manyToMany' ? 'checkbox' : 'radio';
    const tableTarget = $('#editable-jd');
    const tableDefault = `<tr class="text-center border border-gray-700 p-4 headers">
                    <th class="p-2 border border-gray-700"></th>
                    <th class="p-2 border border-gray-700 relative">
                        <span class="editable" contenteditable>Kolom 1</span>
                        <span class="font-semibold absolute right-4 cursor-pointer del-col">x</span>
                    </th>
                    <th class="p-2 border border-gray-700 relative">
                        <span class="editable" contenteditable>Kolom 2</span>
                        <span class="font-semibold absolute right-4 cursor-pointer del-col">x</span>
                    </th>
                </tr>
                <tr class="text-center border border-gray-700 p-4">
                    <td class="p-2 border border-gray-700 relative">
                        <span class="editable" contenteditable>Baris 1</span>
                        <span class="font-semibold absolute right-4 cursor-pointer del-row">x</span>
                    </td>
                    <td class="p-2 border border-gray-700">
                        <div class="w-full flex items-center justify-center">
                            <input type="${type}" name="check1" class="w-6 h-6 check"/>
                        </div>
                    </td>
                    <td class="p-2 border border-gray-700">
                        <div class="w-full flex items-center justify-center">
                            <input type="${type}" name="check1" class="w-6 h-6 check"/>
                        </div>
                    </td>
                </tr>
                <tr class="text-center border border-gray-700">
                    <td class="p-2 border border-gray-700 relative">
                        <span class="editable" contenteditable>Baris 2</span>
                        <span class="font-semibold absolute right-4 cursor-pointer del-row">x</span>
                    </td>
                    <td class="p-2 border border-gray-700 ">
                        <div class="w-full flex items-center justify-center">
                            <input type="${type}" name="check2" class="w-6 h-6 check"/>
                        </div>
                    </td>
                    <td class="p-2 border border-gray-700">
                        <div class="w-full flex items-center justify-center">
                            <input type="${type}" name="check2" class="w-6 h-6 check"/>
                        </div>
                    </td>
                </tr>`;
        tableTarget.append(tableDefault);
    