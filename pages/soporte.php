<div class="bannerSoporte">
    <h2>Centro de Soporte Interno</h2>
    <p>¡Tu solución esta a un clic de distancia!</p>
</div>

<div class="categoriaSoporte">
    <h2>Categorías de Soporte</h2>
    <p class="textHeader">Selecciona la categoría que mejor se adapte a tu solicitud para recibir ayuda personalizada</p>
    <div class="cardsCategorias">
        <div class="card">
            <span class="icon"><i class="fi fi-bs-computer"></i></span>
            <h3>Soporte Técnico</h3>
            <p>Problemas con equipos, software, accesos</p>
        </div>
        <div class="card">
            <span class="icon"><i class="fi fi-ss-email-pending"></i></span>
            <h3>Correos y Comunicación</h3>
            <p>Cuentas de correo, firmas, errores en emails</p>
        </div>
        <div class="card">
            <span class="icon"><i class="fi fi-ss-tools"></i></span>
            <h3>Herramientas y Software</h3>
            <p>CRM, ERP, Aplicaciones empresariales</p>
        </div>
        <div class="card">
            <span class="icon"><i class="fi fi-ss-lock"></i></span>
            <h3>Accesos y Seguridad</h3>
            <p>Recuperación de contraseñas, permisos especiales</p>
        </div>
        <div class="card">
            <span class="icon"><i class="fi fi-ss-user"></i></span>
            <h3>Recursos Humanos</h3>
            <p>Consultas de nómina, beneficios, permisos</p>
        </div>
        <div class="card">
            <span class="icon"><i class="fi fi-ss-city"></i></span>
            <h3>Infraestructura General</h3>
            <p>Internet, equipos, espacio de trabajo</p>
        </div>
    </div>
</div>

<div class="formulario">
    <form class="form" action="">
        <h3>Formulario de Solicitud</h3>
        <p>Completa el siguiente formulario para enviar tu solicitud de soporte</p>
        <div class="inputs">
            <label>Categoría de Soporte</label>
            <select class="categoria" name="categoria">
                <option value="soporte">Soporte Técnico</option>
                <option value="comunicacion">Correos y Comunicaciones</option>
                <option value="software">Herramientas y Software Interno</option>
                <option value="accesos">Accesos y Seguridad</option>
                <option value="recursos">Recursos Humanos</option>
                <option value="infraestructura">Infraestructura</option>
            </select>
            <label>Descripción del Problema</label>
            <textarea name="problema" placeholder="Describe detalladamente el problemas que estás experimentando..."></textarea>
            <sub>Sé específico para que podamos ayudarte más rapido</sub>
            <div class="input2">
                <label class="prioridad">Prioridad</label>
                <label class="ubi">Ubicación o Equipo Afectado</label><br>
                <select class="prioridad" name="prioridad">
                    <option value="baja">Baja</option>
                    <option value="media">Media</option>
                    <option value="alta">Alta</option>
                    <option value="critica">Critica</option>
                </select>
                <input class="ubi" type="text" placeholder="Ej: Oficiona 302, Laptop HP-2023">
            </div>
            <label>Adjuntar Archivos (Opcional)</label>
            <div class="upload-box">
                <input type="file" id="fileInput" multiple hidden />
                <label for="fileInput" class="upload-label">
                    ⬆️ Arrastra y suelta archivos aquí o <span class="click">haz clic para seleccionar</span>
                </label>
                <p class="formats">Formatos permitidos: PNG, JPG, PDF, DOC (Máx. 10MB)</p>
            </div>
            <input type="submit" class="submit" value="Enviar Solicitud">

        </div>
    </form>
</div>



<div class="tickets">
    <div class="seguimiento">
        <h2>Estado y Seguimiento de Solicitudes</h2>
        <p>Monitorea el estado de tus solicitudes y mantente al tanto de su progreso</p>
        <table class="rwd-table">
            <tr class="trHead">
                <th>ID</th>
                <th>Título</th>
                <th>Categoría</th>
                <th>Prioridad</th>
                <th>Estado</th>
                <th>Fecha</th>
            </tr>
            <tr class="trBody">
                <td data-th="col1">VIS-0</td>
                <td data-th="col2">----------</td>
                <td data-th="col3">----------</td>
                <td data-th="col4">----------</td>
                <td data-th="col5">----------</td>
                <td data-th="col6">----------</td>
            </tr>
        </table>
    </div>
</div>