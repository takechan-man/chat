export const state = () => ({
  data: {
    text: '',
    test: '',
  },
})

export const mutations = {
  SET_TEXT(state, text) {
    state.data.text = text
  },
  SET_TEST(state, test) {
    state.data.test = test
  },
}

export const actions = {
  submit({ state }) {
    const headers = {
      'content-type': 'multipart/form-data',
    }
    return this.$axios.post('/chat', state.data, headers)
  },
  test({commit}) {
    const test = this.$axios.get('/')
    commit('SET_TEST', test)
  }
}
