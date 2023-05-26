@extends('padrao')

@section('content') 

<style>
		body {
			margin: 0;
			padding: 0;
		}

		h1 {
			text-align: center;
		}

		table {
			margin: 0 auto;
		}

		td {
			padding: 10px;
		}

		.assento-livre {
			cursor: pointer;
            width: 20px;
		}

		.assento-ocupado {
			cursor: not-allowed;
            width: 20px;
		}
	</style>

<!-- Modal -->
@include('modal.poltronaCadastro')



@endsection