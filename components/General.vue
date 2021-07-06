<template>
	<div>
		<!-- tabs -->
		<tabs active="General"></tabs>

		<!-- title -->
		<ap-title :data="title"></ap-title>

		<!-- text -->
		<ap-text class="mb-3" :data="text"></ap-text>

		<!-- rules -->
		<ap-rules :data="rules"></ap-rules>

		<!-- disclaimer -->
		<ap-text class="mb-3" :data="disclaimer"></ap-text>
	</div>
</template>

<script>
	module.exports = {
		components: {
			'Tabs': httpVueLoader(apretaste.servicePath + '/components/Tabs.vue')
		},
		data: function () {
			return {
				title: {text: 'General'},
				text: {text: 'Apretaste se entrega gratuitamente para el uso de individuos y entidades. Con el fin de ser más útil y ético, se imponen los siguientes términos de uso:'},
				rules: [
					{text:'Utilice un email real. Cualquier email detectado como falso será bloqueado permanentemente.'},
					{text:'En caso de detectarse irregularidades en la obtención de crédito (farming, bugs, etc.), el crédito irregular será restado y su cuenta puede ser suspendida. Usted puede apelar nuestra decisión escribiendo al soporte.'},
					{text:'Todo contenido insertado debe respetar la propiedad intelectual. No inserte textos o imágenes de terceros sin previo derecho de divulgación.'},
					{text:'Todo contenido debe ser publicado en áreas de relevancia. Podemos eliminar o reclasificar contenido publicado en el servicio incorrecto.'},
					{text:'Apretaste no es necesariamente parte de negociaciones, transacciones, ni acuerdos que surjan durante su utilización.'},
					{text:'Los créditos de Apretaste (§) son un sistema de puntos sin representación monetaria.'},
					{text:'Nuestra rifa mensual está catalogada como un "no purchase necessary" sweepstake. Nunca le pediremos dinero para adquirir tickets.'},
					{text:'Guardamos su información personal con el fin de ofrecer un mejor servicio. Su información se guarda encriptada y nunca será compartida con terceros ni vendida.'},
					{text:'Todo contenido que viole estos términos de uso puede ser eliminado por el equipo de Apretaste sin previa notificación. Usted puede apelar nuestra decisión escribiendo al soporte.'},
					{text:'En caso de que estos términos cambien, es su responsabilidad ajustar cualquier contenido escrito por usted para seguir cumpliendo con nuestros términos.'},
					{text:'Usando Apretaste de cualquier forma posible, incluso por mediación de terceras personas, afirma estar cumpliendo con estos términos de uso.'},
				],
				disclaimer: {text: 'Si usted está en desacuerdo con estos términos de uso, cierre su sesión y no continúe el uso de Apretaste. La última actualización de estos términos fue hecha el 14 de Julio del 2020.'}
			}
		}
	}
</script>

<style scoped>
</style>
