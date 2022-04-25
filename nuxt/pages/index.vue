<template>
  <div>
    {{ greet }}
  </div>
</template>

<script>
export default{
  async asyncData({ app }) {
    const greet = await app.$axios.$get('/').catch((err) => err)
    return { greet }
  }
}
</script>
