<template>
	<div>
		<!-- tabs -->
		<tabs active="Influencers"></tabs>

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
				title: {text: 'Influencers'},
				text: {text: 'Estos términos aplican específicamente a los “influencers” de Apretaste, con el fin de crear una discusión más provechosa y cívica para todos.'},
				rules: [
					{text: 'No se puede publicar incitando a la violencia (incitement), lo cual involucra organizar protestas de carácter violento o pedir a tus seguidores (directa o indirectamente) realizar acciones que dañen la vida o propiedad de ellos mismos (autoagresión) u otros.'},
					{text: 'No se puede acosar (bullying), lo cual significa realizar ataques directos y/o continuados hacia una persona no pública, o mensajes de extorsión, difamación y desacreditación a cualquier individuo o persona jurídica, sea o no usuario del app.'},
					{text: 'No se puede publicar contenido pornográfico, ya sea en formato multimedia o textual, ni arte o contenido noticioso con desnudos exagerados o mostrando actividad sexual explícita.'},
					{text: 'No se puede promover el fraude, lo cual incluye pero no se limita a ofrecer premios o beneficios inexistentes, o usando un lenguaje que confunda al lector en su detrimento (false advertisement), o promover redes piramidales (ponzi schemes).'},
					{text: 'No se puede publicar contenido perturbadoramente violento, ya sea en formato multimedia o textual. Esto incluye pero no está limitado a asesinatos, torturas, accidentes sangrientos y abuso animal, incluyendo contenido artístico o noticioso.'},
					{text: 'No se pueden promover llamadas falsas a servicios de emergencia (swatting), incluyendo pero no limitado a pedir a tus seguidores que llamen al número de emergencia médica.'},
					{text: 'No se puede publicar información privada de terceros o de sus seres queridos sin su consentimiento escrito (doxxing), esto incluye pero no se limita a su dirección, teléfono, correo electrónico u otra información que pueda servir para rastrear su paradero. Esto incluye información que sea accesible en la internet en el caso que el dueño no la haya hecho pública a conciencia.'},
					{text: 'No se permite hacerse pasar por otra persona (impersonate), ya sea un individuo, personaje ficticio o entidad, e incluye a otros influencers, usuarios del app o empleados de Apretaste.'},
					{text: 'Debe respetar la propiedad intelectual y los derechos de autor. Antes de compartir contenido debe tener derechos para hacerlo, y si propaga contenido público mencione directamente al creador o mantenga las marcas de agua y firmas digitales de la obra.'},
					{text: 'El incumplimiento de estos términos podría conllevar a la eliminación de sus notas o de su perfil de influencer, según la gravedad de la falta.'},
				],
				disclaimer: {text: 'Si usted está en desacuerdo con estos términos, puede mantenerse usando Apretaste, pero no podrá ser un influencer. La última actualización de estos términos fue hecha el 15 de Enero del 2021.'}
			}
		}
	}
</script>

<style scoped>
</style>
