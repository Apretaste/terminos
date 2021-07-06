<template>
	<div>
		<ap-tabs :data="this.data"></ap-tabs>
	</div>
</template>

<script>
	module.exports = {
		props: {
			active: String
		},
		created: function() {
			this.data = [
				{caption:'General', active:this.active=='General', onTap:function(){apretaste.send({command:'TERMINOS'})}},
				{caption:'Pizarra', active:this.active=='Pizarra', onTap:function(){apretaste.send({command:'TERMINOS PIZARRA'})}},
				{caption:'Influencers', active:this.active=='Influencers', onTap:function(){apretaste.send({command:'TERMINOS INFLUENCERS'})}},
			];
		}
	}
</script>

<style scoped>
</style>
