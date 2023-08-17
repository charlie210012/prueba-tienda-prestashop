<div class="panel">
    <h3>{l s='Importar Productos desde CSV' mod='importcsvproducts'}</h3>
    <form action="{$_SERVER['REQUEST_URI']}" method="post" enctype="multipart/form-data">
        <label for="csv_file">{l s='Seleccionar archivo CSV:' mod='importcsvproducts'}</label>
        <input type="file" name="csv_file" id="csv_file" accept=".csv">
        <br>
        <button type="submit" name="import_csv" class="btn btn-default">{l s='Importar' mod='importcsvproducts'}</button>
    </form>
    {if isset($errors)}
        <div class="alert alert-danger">
            {foreach from=$errors item=error}
                <p>{$error}</p>
            {/foreach}
        </div>
    {/if}
    {if $successMessage}
        <div class="alert alert-success">
            <p>{$successMessage}</p>
        </div>
    {/if}
</div>
