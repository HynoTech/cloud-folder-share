<div class="wrap">
    <form method="post" name="options" target="_self" id="options">

        <img src="<?php echo plugins_url('img/titulo-admin.png', __FILE__); ?>" />

        <div id="poststuff">
            <div class="metabox-holder columns-2" id="post-body">
                <!-- /post-body-content -->
                <div class="postbox-container" id="postbox-container-1">
                    <div class="meta-box-sortables ui-sortable" id="side-sortables">
                        <div class="postbox " id="linksubmitdiv">
                            <h3 class="hndle"><span>
                                    <?php _e('Guardar Configuracion', 'CFS-Hyno'); ?>
                                </span></h3>
                            <div class="inside">
                                <div id="submitlink" class="submitbox">
                                    <div id="minor-publishing">
                                        <div id="misc-publishing-actions">
                                            <p class="popular-tags"><?php _e('Hola, espero que disfruten de mi plugin. Me llevó un montón de horas para hacerlo. Una gran cantidad de galletas y jugo de uva que se derramó sobre el teclado en la creación de este plugin. Si te gusta, me podrías ayudar invitandome un café recién hecho.', 'CFS-Hyno'); ?> </p>
                                            <div class="misc-pub-section center">
                                                <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                                                    <input type="hidden" name="cmd" value="_s-xclick">
                                                    <input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
                                                           ">
                                                    <input type="image" src="<?php echo plugins_url('img/paypal_200x96.png', __FILE__); ?>" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                                                    <img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="major-publishing-actions">
                                        <div id="delete-action"> <a href="http://www.hyno.ok.pe" target="_blank">HynoTech Web</a> </div>
                                        <div id="publishing-action">
                                            <input type="submit" value="<?php _e('Guardar', 'CFS-Hyno'); ?>" tabindex="4" id="publish" class="button-primary" name="CFS_Save" />
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="post-body-content">
                    <div class="stuffbox" id="instrucciones_hyno">
                        <h3><?php _e('Instrucciones de Uso', 'CFS-Hyno'); ?></h3>
                        <div class="inside">
                            <?php _e('Usa el codigo BB [CFS] para compartir una carpeta en tus post:', 'CFS-Hyno'); ?><br />
                            <p class="popular-tags">
                                <em>[CFS cloud='dropbox' name='Nombre Carpeta']https://www.dropbox.com/sh/jt8rwz8jfqcr9vh/yv0oj0MMvc[/CFS]</em>
                            </p>
                            <?php
                            echo do_shortcode("[CFS cloud='dropbox' name='Nombre Carpeta']https://www.dropbox.com/sh/jt8rwz8jfqcr9vh/yv0oj0MMvc[/CFS]");
                            ?>
                        </div>
                    </div>
                    <div class="stuffbox" id="version_defecto">
                        <h3>
                            <?php _e('Valores Predeterminados', 'CFS-Hyno'); ?>
                        </h3>
                        <div class="inside">
                            <table cellpadding="0" class="links-table">
                                <tbody>
                                    <tr>
                                        <th scope="row">
                                            <label for="CFS_cloud"><?php _e('Nube por defecto: ', 'CFS-Hyno'); ?></label>
                                        </th>
                                        <td>
                                            <select name ="CFS_cloud" id ="CFS_cloud" style="width: 150px;">
                                                <?php
                                                $icons_dir = plugins_url('img/icons/', __FILE__);
                                                foreach ($this->driveList as $drive) {
                                                    $status = ($drive['state']) ? '' : 'disabled';
                                                    $selected = (get_option('CFS_cloud') == $drive['id']) ? 'selected' : ' ';
                                                    echo '<option ' . $selected . $status . ' value="' . $drive['id'] . '" data-image="' . $icons_dir . $drive['icon'] . '">' . $drive['name'] . '</option>';
                                                }
                                                ?>
                                                <!-- <option disabled="disabled" value="box" data-image="http://www.google.com/s2/favicons?domain=www.box.com">Google Drive</option> -->
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <label for="CFS_height"><?php _e('Alto maximo del contenedor: ', 'CFS-Hyno'); ?></label>
                                        </th>
                                        <td>
                                            <input type="text" id="CFS_height" name="CFS_height" maxlength="4" style="width: 100px;" value="<?php echo get_option('CFS_height') ?>" />px
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <input type="submit" value="<?php _e('Guardar', 'CFS-Hyno'); ?>" tabindex="4" id="submitbutton" class="button-primary" name="CFS_Save" />
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="postbox-container" id="postbox-container-2">
                    <div class="meta-box-sortables ui-sortable" id="advanced-sortables">
                        <hr />
                        <div class="stuffbox" id="modo_insercion">
                            <h3>
                                <?php _e('Parametros de Shortcode', 'CFS-Hyno'); ?>
                            </h3>
                            <div class="inside">
                                <p class="popular-tags"><em>[CFS cloud='<span style='color: red;'>dropbox</span>' name='<span style='color: green;'>Nombre Carpeta</span>']<span style='color: mediumslateblue;'>https://www.dropbox.com/sh/jt8rwz8jfqcr9vh/yv0oj0MMvc</span>[/CFS]</em></p>
                                <table cellpadding="0" class="links-table">
                                    <tbody>
                                        <tr>
                                            <th scope="row"><span style='color: red; font-weight: bold;'>cloud</span></th>
                                            <td>
                                                <?php _e('Nube a usar (Validos solo los de la lista Inferior).', 'CFS-Hyno'); ?><br />
                                                <ul>
                                                    <?php
                                                    foreach ($this->driveList as $driveList) {
                                                        if($driveList['state'])
                                                        echo "<li><span style='color: red;'>".$driveList['id']."</span>: ".$driveList['name']."</li>";
                                                    }
                                                    ?>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><span style='color: green; font-weight: bold;'>name</span></th>
                                            <td><?php _e('Nombre a mostrar en el blog.(si no se asigna, lo toma desde la Nube)', 'CFS-Hyno'); ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><span style='color: mediumslateblue; font-weight: bold;'>URL</span></th>
                                            <td><?php _e('URL de la carpeta a mostrar', 'CFS-Hyno'); ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </form>
</div>
