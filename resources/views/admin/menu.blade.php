<nav class="navbar navbar-findcond navbar-fixed-top">
    <div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="/">ASMA MODAEVI</a>
		</div>
		<div class="collapse navbar-collapse" id="navbar">
			<ul class="nav navbar-nav navbar-right">
                <li><a href="{{ route('admin.index') }}">Accueil<span class="sr-only">(current)</span></a></li>
				<li class="active"><a href="{{ route('admin.robe.index') }}">Robes<span class="sr-only">(current)</span></a></li>
                <li class="active"><a href="{{ route('admin.cliente.index') }}">Clientes</a></li>
                <li class="active"><a href="{{ route('admin.location.index') }}">Location</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Messages <span class="badge">0</span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Message 1</a></li>
                        <li><a href="#">Message 2</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">&nbsp;<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#exit">Paramètres</a></li>
                        <li class="divider"></li>
                        <li><a href="#exit">Déconnexion</a></li>
                    </ul>
                </li>
			</ul>
			<form class="navbar-form navbar-right search-form" role="search">
				<input type="text" class="form-control" placeholder="Chercher" />
			</form>
		</div>
	</div>
</nav>
