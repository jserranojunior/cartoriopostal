import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex)

export default new Vuex.Store({
  state: {
    proponentes:{}
  },
  mutations: {
    SUBMITPROP(state,inputs){
      state.proponentes = inputs
    }
  },
  actions: {
    SubmitProp(context, data){
      context.commit('SUBMITPROP',data)
    }
  }
})
