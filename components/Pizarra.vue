<template>
	<div>
		<!-- tabs -->
		<tabs active="Pizarra"></tabs>

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
				title: {text: 'Pizarra'},
				text: {text: 'Con el fin de hacer la Pizarra más útil y posibilitar un uso más amigable para todo nuestro público, se imponen los siguientes términos de uso:'},
				rules: [
					{text: 'No debe publicar notas con fotos o descripciones gráficas de otros sin su consentimiento de manera maliciosa llevará a la posterior eliminación de dichas notas.'},
					{text: 'No debe publicar notas que revele información personal o de contacto de otros sin su consentimiento expreso, llevará a la posterior eliminación de dichas notas.'},
					{text: 'No debe publicar notas en las cuales se llame a la acción para cometer actos violentos o delictivos, directa o indirectamente. Entre ellos crímenes, tráfico sexual, venta de drogas, terrorismo, etc.; llevará a la posterior eliminación de dichas notas.'},
					{text: 'No debe publicar notas con contenido creado por otros sin su consentimiento informado; llevará a la posterior eliminación de dichas notas.'},
					{text: 'No debe publicar notas con cualquier tipo de material que involucre directa o indirectamente a un menor de edad sin el consentimiento de sus guardianes legales; llevará a la posterior eliminación de dichas notas.'},
					{text: 'No debe publicar notas con cualquier material sugestivo que involucre a menores de edad, por ejemplo, desnudos o ropa excesivamente reveladora, o poses sexualizadas; llevará a la posterior eliminación de dichas notas.'},
					{text: 'No debe publicar notas con imágenes, descripciones gráficas o dibujos animados, que se enfoquen grotescamente en actos sexuales o muestren partes íntimas pornográficamente; llevará a un llamado de atención por parte del equipo de A! y la nota será muteada (No aparecerá en la pestaña Global).'},
					{text: 'No debe publicar notas con imágenes o descripciones gráficas de sucesos moderadamente sangrientos o violentos con la intención de generar horror; llevará a un llamado de atención por parte del equipo de A! y la nota será muteada (No aparecerá en la pestaña Global).'},
					{text: 'El incumplimiento de los términos antes descritos podría conllevar al bloqueo de su cuenta indefinidamente en dependencia a la gravedad de la falta.'},
				],
				disclaimer: {text: 'Si usted está en desacuerdo con estos términos, puede mantenerse usando Apretaste, pero por favor descontinúe el uso de la Pizarra. La última actualización de estos términos fue hecha el 16 de Septiembre del 2020.'}
			}
		}
	}
</script>

<style scoped>
</style>
