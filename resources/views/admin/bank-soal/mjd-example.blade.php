@extends('layouts.app')
@section('styles')
<link rel="stylesheet" href="{{ asset('plugins/fields-linker/fieldsLinker.css') }}">
@endsection

@section('content')
<div id="container">

	  <div class="bonds" id="original" style="display:block;">
	
	  </div>

	 <hr/>
		<button type="button" class="btn fieldLinkerSave btn-sm btn-primary">Save links</button>
		&nbsp;<span id="output"></span>
		<br /><br />
		<div id="input"></div>

</div>
 @endsection
 @section('scripts') 
  
	  {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script> --}}

	  {{-- <script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script> --}}

	  {{-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> --}}


	  <script src="{{ asset('plugins/fields-linker/fieldsLinker.js') }}"></script>

<script>  
	var fieldLinks;
	var inputOri;
			$(document).ready(function () {
				inputOri = {
					"localization": {
					},
					"options": {
						"associationMode": "manyToMany", // oneToOne,manyToMany
						"lineStyle": "square-ends",
						"buttonErase": "Erase Links",
						"displayMode": "original",
						"whiteSpace": $("input[name='whiteSpace']:checked").val(), //normal,nowrap,pre,pre-wrap,pre-line,break-spaces default => nowrap
						"mobileClickIt": true
					},
					"Lists": [
						{
							"name": "Columns in files",
							"list": [
								"firstName",
								"lastName",
								"phone",
								"email",
								"role",
								"Birthday",
								"Adress",
								"[Main-stats][Global-sales-stats][European-region][France]",
								"City"
							]
						},
						{
							"name": "Available Fields",
							"list": [
								"Company",
								"jobTitle",
								"adress",
								"adress",
								"adress",
								"first_name",
								"last_name",
								"email_adress",
								"Phone number",
								"Pourcentage of france in the global market",

							],
							"mandatories": [
								"last_name",
								"email_adress"
							]
						}
					],
					"existingLinks": [{ "from": "lastName", "to": "last_name" }, { "from": "firstName", "to": "first_name" }, { "from": "role", "to": "jobTitle" }]
				};
		
	
	 		$(".fieldLinkerSave").on("click",function(){
				var results = fieldLinks.fieldsLinker("getLinks");
				$("#output").html("output => " + JSON.stringify(results));
			});


		  fieldLinks=$("#original").fieldsLinker("init",inputOri);
		  
		});
		
 
		$("input[name='associationMode']").on("click", function () {
		 let choice = $(this).val();
			fieldLinks.fieldsLinker("changeParameters",{"associationMode":choice});
		});
		
		$("input[name='enable']").on("click", function () {
		 let choice = $(this).val();
		 
			fieldLinks.fieldsLinker(choice);
		});		
		
		$("input[name='lineStyle']").on("click", function () {
		 let choice = $(this).val();
			fieldLinks.fieldsLinker("changeParameters",{"lineStyle":choice});
		});
		
		$("input[name='whiteSpace']").on("click", function () {
		 let choice = $(this).val();
			fieldLinks.fieldsLinker("changeParameters",{"whiteSpace":choice});
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

</script>  

@endsection