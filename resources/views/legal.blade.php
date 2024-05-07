@extends('layouts.main')

@push('styles')
<style>
    body{
        background-color: #1E1E1E !important;
        color: #fff !important;
    }

    .section{
        background-color: #1E1E1E !important;
    }

    nav .logo{
        mix-blend-mode:difference;
    }

    nav a{
        color: #fff;
    }

    nav.scroll{
        background-color: #1E1E1E !important;
    }
</style>
@endpush

@section('content')
<section class="section intro-section">
    <div class="container">
        <div class="row btm-mr">
            <div class="col-md-6">
                <div class="title-group">
                    <p class="wide">Textos Legales</p>
                    <h2 class="display-3">{{ $text }}</h2>
                </div>
                <p><small>última actualización: 2024-05-10</small></p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-7">
                @switch($text)
                    @case('Aviso de Privacidad')
                    <p><strong>AVISO DE PRIVACIDAD PARA DATOS PERSONALES EN POSESION DE PARTICULARES PARA HU&Eacute;SPEDES </strong></p>
                    <p>En cumplimiento con lo establecido por la Ley Federal de Protecci&oacute;n de Datos Personales en Posesi&oacute;n de los Particulares, se extiende el presente Aviso de Privacidad.</p>
                    <p>I. Responsable del Tratamiento de Datos Personales GRUPO MALIA INMOBILIARIA SA DE CV, se&ntilde;ala como domicilio el ubicado en Blvd. Pe&ntilde;afiel # 600, Puerto Interior de la ciudad de Silao, Guanajuato C.P. 36275, hace de su conocimiento que los datos personales que nos proporcione como hu&eacute;sped o hu&eacute;sped potencial ser&aacute;n tratados por GRUPO MALIA INMOBILIARIA SA DE CV de ahora en adelante para este aviso indistintamente HC Hacienda Catrina Hotel Boutique a trav&eacute;s de su Departamento de Datos personales estrictamente para los fines que m&aacute;s adelante se se&ntilde;alan.</p>
                    <p>II. Datos Personales Los datos personales que ser&aacute;n tratados por GRUPO MALIA INMOBILIARIA SA DE CV, a trav&eacute;s de su Departamento de Tratamiento de Datos Personales, consisten en informaci&oacute;n del titular y comprende nombre y apellidos, fecha de nacimiento, genero, domicilio , tel&eacute;fonos , correo electr&oacute;nico, redes sociales, lista de gustos e inter&eacute;s en sus redes sociales, rango de edad, registro federal de contribuyentes (RFC), estado civil, ocupaci&oacute;n, nacionalidad o ciudadan&iacute;a, n&uacute;mero de placas de su autom&oacute;vil; principal motivo de su viaje y n&uacute;mero de viajes al a&ntilde;o; nombre de su trabajo o empresa , su puesto y datos de contacto; datos de su tarjeta de cr&eacute;dito o d&eacute;bito y forma de pago, datos de facturaci&oacute;n; informaci&oacute;n acerca de sus intereses, preferencias, opiniones y hobbies; datos demogr&aacute;ficos, incluyendo datos de geolocalizaci&oacute;n de su dispositivo cada vez que haga uso de la red wifi de HC Hacienda Catrina Hotel Boutique , su direcci&oacute;n IP y tipo de browser cuando se obtienen por medios electr&oacute;nicos, datos del uso y consumo de los servicios de internet desde su dispositivo, as&iacute; como el uso de aplicaciones y servicios de terceros en las siguientes categor&iacute;as:</p>
                    <ul>
                    <li>a) Datos de identificaci&oacute;n</li>
                    <li>b) Datos de car&aacute;cter personales,</li>
                    <li>c) Datos econ&oacute;micos, financieros y de seguros y, en su caso,</li>
                    <li>d) Datos sensibles (estado de salud)</li>
                    </ul>
                    <p>El Responsable no recabara personal o directamente datos personales de menores de edad y estos deber&aacute;n de abstenerse de proporcionarlos a trav&eacute;s de cualquier medio. El Responsable &uacute;nicamente trata datos personales de menores de edad facilitados por sus padres y/o tutores, con el consentimiento de estos &uacute;ltimos de todos los casos, cuando el tratamiento de los mismos es necesario para el cumplimiento de las finalidades originadas descritas en el presente Aviso de Privacidad. Los padres y/o tutores podr&aacute;n ejercer en todo momento los derechos ARCO o revocar el consentimiento para el tratamiento de los datos personales de menores de edad que hubiesen proporcionado para disfrutar de los servicios o actividades disponibles en las instalaciones del Responsable.</p>
                    <p>DATOS PERSONALES SENSIBLES</p>
                    <p>En determinados casos, el Responsable debe recabar datos personales relacionados con su estado de salud. Los datos personales sensibles identificados (estado de salud) ser&aacute;n tratados para el cumplimiento de las finalidades identificadas en el presente Aviso de Privacidad y, en particular, para la prestaci&oacute;n de servicios ofrecidos por el Responsable cuya naturaleza requiere que &eacute;ste adopte medidas especificas para asegurar el bienestar y/o salud de nuestros hu&eacute;spedes. Usted podr&aacute; rehusarse a proporcionar datos personales sensibles y en tales casos, el Responsable podr&aacute; negar el servicio espec&iacute;fico que requiera el tratamiento de dicha informaci&oacute;n. El Responsable tambi&eacute;n podr&aacute; tratar datos personales sensibles relacionados con su estado de salud, cuando estos sean proporcionados por el titular para la prestaci&oacute;n de servicios o asistencia especiales, expresamente requeridos para su estancia en nuestras instalaciones. Por lo anterior, y cuando ello sea estrictamente necesario, solicitaremos su consentimiento expreso y por escrito para el tratamiento de dichos datos personales sensibles, a trav&eacute;s de medios que informen adecuadamente sobre dicho tratamiento.</p>
                    <p>III. Finalidades del Tratamiento de Datos Personales:</p>
                    <p>GRUPO MALIA INMOBILIARIA SA DE CV tambi&eacute;n conocido por el concepto de HC Hacienda Catrina Hotel Boutique recabar&aacute; sus datos personales sin fines de divulgaci&oacute;n, y ser&aacute;n tratados &uacute;nicamente para los siguientes fines:</p>
                    <p>Finalidades Primarias: Tener registro de los hu&eacute;spedes para identificarlos como clientes o usuarios y brindarles el mejor servicio y atenci&oacute;n posible. Acreditar la identidad el hu&eacute;sped y verificar la veracidad de la informaci&oacute;n que nos proporciona, pudiendo cancelar su cuenta de usuario en caso de encontrar anomal&iacute;as o falsedad en los datos proporcionados. Contactar a los hu&eacute;spedes cuando sea necesario a trav&eacute;s de distintos medios de comunicaci&oacute;n, tales como, tel&eacute;fono, chat, correo electr&oacute;nico, entre otros para completar transacciones, procesar reservaciones o pre- registros antes de su llega al hotel, brindarle servicios personalizados, otorgarle promociones, beneficios, o descuentos, actualizar nuestro sistemas o bases de datos, o en caso de emergencia. Obtener datos de facturaci&oacute;n en caso de que sea requerido. Lograr una reservaci&oacute;n presencial directa en nuestros hoteles o en l&iacute;nea, conforme a sus especificaciones y necesidades. Obtener los datos de su tarjeta de cr&eacute;dito, los cuales solo ser&aacute;n empleados como garant&iacute;a de la reservaci&oacute;n, emitiendo un cargo solo en caso de no hacer efectiva la reservaci&oacute;n. Proporcionar los servicios expresamente contratados, en cualquiera de sus modalidades para su estancia en cualquiera de las instalaciones del Responsable. Asegurar la funcionalidad y calidad de los servicios contratados, incluso mediante la emisi&oacute;n de medios identificativos para el uso de nuestras instalaciones. Asegurar la seguridad de los hu&eacute;spedes en todas las instalaciones del Responsable y, en su caso, la contrataci&oacute;n o confirmaci&oacute;n de servicios prestados por terceros que sean o hayan sido solicitados por los propios hu&eacute;spedes con anterioridad o durante su estancia. Prestar asistencia, entregar informaci&oacute;n y asistir al hu&eacute;sped en la contrataci&oacute;n de servicios propios o de terceros, durante su estancia en las instalaciones del Responsable. Para permitir y facilitar el acceso a nuestros servicios en l&iacute;nea. Para notificarle cambios en nuestros servicios. Facturaci&oacute;n de los servicios y productos proporcionados, as&iacute; como su cobro judicial o extrajudicial. Cumplimiento de la legislaci&oacute;n aplicable sobre obligaciones fiscales o de informaci&oacute;n sobre contratos u operaciones que deben ser reportadas a las autoridades competentes. Estad&iacute;stica o registro hist&oacute;rico de hu&eacute;spedes. Para el otorgamiento de posibles l&iacute;neas de cr&eacute;dito comercial. Para la promoci&oacute;n de productos, o servicios complementarios incluso con empresas afiliadas o socios comerciales del mismo responsable. Finalidades Secundarias Consultar sobre la calidad de nuestro servicio y comprender las necesidades espec&iacute;ficas de cada hu&eacute;sped, para prestarle un mejor servicio. Socios comerciales, o afiliadas del Responsable, con finalidades de resguardo centralizado de la informaci&oacute;n, control de altas y bajas, cambios en su reservaci&oacute;n de servicios, as&iacute; como para la realizaci&oacute;n de estad&iacute;sticas de uso de nuestros servicios. Organismos P&uacute;blicos; administraciones publicas federales, estatales o municipales, entidades reguladoras u otras autoridades competentes; para el cumplimiento de obligaciones informativas, as&iacute; como para el cumplimiento de requerimientos judiciales o administrativos emitidos por autoridades competentes. Agregadores y buscadores de tarifas y reservaciones; para la oferta de tarifas de nuestros servicios y la gesti&oacute;n automatizada de sus reservaciones. Prestadores de servicios para que asistan al Responsable en la prestaci&oacute;n de los servicios relacionados con su reservaci&oacute;n y, en su caso, los servicios adicionales necesarios o solicitados expresamente por usted durante su estancia. Personas sujetas al secreto profesional m&eacute;dico u obligaci&oacute;n equivalente, en aquellos casos en que la transferencia de datos personales sensibles, relativos a su estado de salud presente y futuro, sea indispensable para la atenci&oacute;n m&eacute;dica, la prevenci&oacute;n, diagn&oacute;stico, la prestaci&oacute;n de asistencia sanitaria, tratamientos m&eacute;dicos o la gesti&oacute;n de servicios sanitarios. Empresas de cobranza, para la recuperaci&oacute;n de cr&eacute;ditos impagados y su cobro judicial y extrajudicial. Los datos ser&aacute;n guardados bajo la m&aacute;s estricta confidencialidad y no se les podr&aacute; dar un uso distinto a los antes mencionados, salvo que medie un cambio en este Aviso de Privacidad. Una vez que se cumpla la finalidad del tratamiento de datos, &eacute;stos ser&aacute;n guardados con el &uacute;nico prop&oacute;sito de determinar posibles responsabilidades en relaci&oacute;n con su tratamiento, hasta el plazo de prescripci&oacute;n legal o contractual de &eacute;stas. Durante dicho periodo, los datos personales no podr&aacute;n ser objeto de tratamiento y transcurrido &eacute;ste, se proceder&aacute; a su cancelaci&oacute;n en la base de datos que corresponde.</p>
                    <p>IV. Recolecci&oacute;n de los Datos Personales Nuestra p&aacute;gina de internet hace uso de Cookies que puedan dar informaci&oacute;n acerca de los usuarios y recopilan datos sobre los h&aacute;bitos de su navegador. Para la recolecci&oacute;n de datos personales, seguimos los principios que marca la Ley como la licitud, calidad, consentimiento, informaci&oacute;n, finalidad, lealtad, proporcionalidad y responsabilidad. Los datos personales ser&aacute;n recabados directamente del titular ya sea de forma directa, cuando usted nos los proporciona v&iacute;a telef&oacute;nica, correo electr&oacute;nico o a trav&eacute;s de medios electr&oacute;nicos en nuestro sitio web. De forma indirecta, cuando usted proporciona datos personales o alguno de nuestros proveedores, como agencias de viajes o terceros que nos proveen bases de datos, que nos apoyan durante el proceso de reservaci&oacute;n o mercadeo, o por cualquier otra forma l&iacute;cita. Adem&aacute;s, podremos obtener informaci&oacute;n del titular de otras fuentes permitidas por la ley, tales como directorios telef&oacute;nicos, referencias de empresas o particulares, bases de datos publicas de cualquier entidad o dependencia p&uacute;blica o privada, entre otras.</p>
                    <p>V. Opciones y medios para limitar el uso o divulgaci&oacute;n de los datos; GRUPO MALIA INMOBILIARIA SA DE CV cuenta con las medidas de seguridad, administrativas, t&eacute;cnicas y f&iacute;sicas necesarias y suficientes para proteger sus datos personales contra da&ntilde;o, p&eacute;rdida, alteraci&oacute;n, destrucci&oacute;n, uso, acceso o tratamiento no autorizado. Los datos personales son salvaguardados en bases de datos y equipos de c&oacute;mputo que cuentan con la seguridad necesaria para prevenir fugas de informaci&oacute;n Las herramientas de seguridad inform&aacute;tica est&aacute;n apoyadas por una pol&iacute;tica interna de seguridad de la informaci&oacute;n que explica a los colaboradores las consideraciones de seguridad que deben tomar en cuenta al utilizar un sistema inform&aacute;tico. Por ello, se hacen de su conocimiento el medio que usted tiene para solicitar la limitaci&oacute;n del uso o divulgaci&oacute;n de sus datos personales, materia de este Aviso: a) V&iacute;a correo electr&oacute;nico dirigido al Departamento de Tratamiento de Datos Personales a la direcci&oacute;n electr&oacute;nica: <a href="mailto:datospersonales@haciendacatrina.com.mx ">datospersonales@haciendacatrina.com.mx </a></p>
                    <p>VI. Medios para ejercer los derechos de acceso, rectificaci&oacute;n, cancelaci&oacute;n u oposici&oacute;n, as&iacute; como Revocaci&oacute;n del consentimiento, de conformidad con lo dispuesto en la Ley; Usted podr&aacute; ejercer sus derechos ARCO (acceso, rectificaci&oacute;n, cancelaci&oacute;n y/u oposici&oacute;n), as&iacute; como revocar su consentimiento para el tratamiento de datos personales en cualquier momento, debiendo, &uacute;nicamente para tales efectos, enviar una solicitud por escrito al Departamento de Tratamiento de Datos Personales, ubicados en el domicilio siguiente: en Blvd. Pe&ntilde;afiel # 600, Puerto Interior de la ciudad de Silao, Guanajuato C.P. 36275, La solicitud ARCO y/o la solicitud de revocaci&oacute;n del consentimiento deber&aacute; contener y acompa&ntilde;ar lo que se&ntilde;ala la Ley en su art&iacute;culo 29, tal como: El nombre, domicilio del titular y cuenta de correo electr&oacute;nico para poder comunicarle la respuesta a su solicitud. Los documentos que acrediten su identidad o, en su caso, la representaci&oacute;n legal del titular La descripci&oacute;n clara y precisa de los datos personales respecto de los que se busca ejercer alguno de sus derechos. Cualquier otro elemento o documento que facilite la localizaci&oacute;n de los datos personales, as&iacute; como cualquier otro documento que exija la legislaci&oacute;n vigente al momento de la presentaci&oacute;n de la solicitud. GRUPO MALIA INMOBILIARIA SA DE CV tambi&eacute;n conocido por el concepto de HC Hacienda Catrina Hotel Boutique no estar&aacute; obligado a cancelar los datos personales cuando se trate de alguno de los supuestos establecidos en la Ley.</p>
                    <p>VII. Transferencias de datos que se efect&uacute;en, GRUPO MALIA INMOBILIARIA SA DE CV tambi&eacute;n conocido por el concepto de HC Hacienda Catrina Hotel Boutique puede transferir sus datos personales a terceros para efectos de las finalidades establecidas en este Aviso de Privacidad. Lo anterior incluye:</p>
                    <p>a) Sus datos personales arriba mencionados podr&aacute;n ser comunicados a las autoridades competentes, conforme a la legislaci&oacute;n aplicable. Estas transferencias pueden tener car&aacute;cter nacional o internacional.</p>
                    <p>b) GRUPO MALIA INMOBILIARIA SA DE CV tambi&eacute;n conocido por el concepto de HC Hacienda Catrina Hotel Boutique puede transferir todos o parte de los datos personales mencionados a proveedores de servicios de soporte de la p&aacute;gina web, con la finalidad de que provean datos como su direcci&oacute;n IP., servicio de estad&iacute;sticas y an&aacute;lisis de informaci&oacute;n del uso de nuestra p&aacute;gina. Estas transferencias pueden tener car&aacute;cter nacional o internacional.</p>
                    <p>c) Igualmente puede enviar sus datos personales a proveedores del servicio de mercadotecnia y publicidad para el hosting de informaci&oacute;n para el env&iacute;o de correos electr&oacute;nicos y generaci&oacute;n de publicidad. Si usted no desea que GRUPO MALIA INMOBILIARIA SA DE CV tambi&eacute;n conocido por el concepto de HC Hacienda Catrina Hotel Boutique, transfiera sus datos personales a efectos de dar cumplimiento a las finalidades se&ntilde;aladas dentro del presente aviso, le pedimos que v&iacute;a correo electr&oacute;nico externe su negativa, a la direcci&oacute;n datospersonales@haciendacatrina.com.mx en donde se le atender&aacute; en tiempo y forma conforme a lo establecido en la Ley.</p>
                    <p>El presente aviso de privacidad, se le har&aacute; llegar a los terceros a quien ha de realizarse la transferencia de datos, a fin de que conozca las limitaciones a que el titular se sujet&oacute; en la divulgaci&oacute;n de sus datos.</p>
                    <p>VIII. Consentimiento del Titular En t&eacute;rminos de lo dispuesto por el art&iacute;culo 8 de la Ley se entender&aacute; que el titular consiente t&aacute;citamente el tratamiento de sus datos, cuando habi&eacute;ndose puesto a su disposici&oacute;n el presente Aviso de Privacidad, no manifieste su oposici&oacute;n.</p>
                    <p>IX. De los plazos Tendremos un plazo m&aacute;ximo de 20 d&iacute;as h&aacute;biles para darle respuesta a trav&eacute;s del correo electr&oacute;nico que nos proporcione para tales efectos, respecto de la solicitud que realice sobre la limitaci&oacute;n del uso o divulgaci&oacute;n de sus datos personales materia de este aviso; la solicitud respecto a sus derechos ARCO (acceso, rectificaci&oacute;n, cancelaci&oacute;n u oposici&oacute;n); la oposici&oacute;n a la transferencia de sus datos personales, o; la revocaci&oacute;n de su consentimiento para el tratamiento de sus datos. As&iacute; mismo, en caso de resultar procedente, contaremos con 15 d&iacute;as h&aacute;biles para que la determinaci&oacute;n adoptada sea implementada. Los plazos antes referidos podr&aacute;n ser ampliados una sola vez por un periodo igual, siempre y cuando as&iacute; lo justifiquen las circunstancias del caso.</p>
                    <p>X. Cambios al Aviso de Privacidad Nos reservamos el derecho de cambiar este Aviso de Privacidad en cualquier momento.</p>
                    <p><em>Fecha de la &uacute;ltima actualizaci&oacute;n al presente aviso de privacidad: Sin Cambios a la fecha</em></p>
                    @break
                    
                    @case('Terminos y Condiciones')
                        
                        @break

                    @case('Uso de Cookies')
                        
                        @break
                    @default
                        
                @endswitch   
            </div>
        </div>
    </div>
</section>

<div class="section white-scroll-text">
    @include('layouts.utilities.scroll_text')
</div>
@endsection

@push('scripts')

@endpush
