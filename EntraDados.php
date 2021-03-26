<div class="container-sm text-center" style="margin-top: 5%; margin-bottom: 10%;">
    <div>
        <h1 id="titulo">Análise de Potencial Pessoal</h2>
        <p id="subtitulo">Complete com suas informações.</p>
    </div>
    <form action='teste.php' method='post'>
        <div class="input-group">
            <span class="input-group-text">Nome e sobrenome:</span>
            <input type="text" aria-label="First name" class="form-control" name='nome' placeholder="Ex: 'João'" required>
            <input type="text" aria-label="Last name" class="form-control" name='sobrenome' placeholder="Ex: 'Silva'" required>
        </div>
        <!---->
        <div class="row">
            <div class="col-md-6">
                <div class="form-check form-check-inline">
                    <h4 class=" fs-4 fw-bold">Idade</h4>
                    <input class="form-check-input" type="radio" name="idade" value="MENOR" >
                    <label class="form-check-label" for="idade">
                        Menos de 18 anos
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="idade" value="MAIOR" checked>
                    <label class="form-check-label" for="idade">
                        Mais de 18 anos
                    </label>
                </div>
            </div>
            <!---->
            <div class="col-md-6">
                <div class="form-check form-check-inline">
                    <h4 class=" fs-4 fw-bold">Sexo</h4>
                    <input class="form-check-input" type="radio" name="sexo" value="MASC">
                    <label class="form-check-label">Masculino</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="sexo"  value="FEM">
                    <label class="form-check-label">Feminino</label>
                </div>
            </div>
        </div>        
        <!---->
        <div class="input-group mb-3">
            <span class="input-group-text">Cidade:</span>
            <input type="text" class="form-control" placeholder="Ex: São Paulo" name="cidade" aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">Estado:</span>
            <input type="text" class="form-control" placeholder="Ex: 'SP'" name="uf" maxlength="2" aria-describedby="basic-addon1">
        </div>
        <!---->
        <div class="input-group mb-3">
            <span class="input-group-text">Telefone:</span>
            <input type="text" class="form-control" placeholder="(99)99999-9999" name="telefone" maxlength="11" aria-describedby="basic-addon1">
        </div>
        <!---->
        <div class="input-group mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default">E-mail:</span>
            <input type="mail" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="mail" required>
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
</div>
