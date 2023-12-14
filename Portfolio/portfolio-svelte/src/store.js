import { writable } from 'svelte/store';

//Pour Chargement IMG *
export const isLoading = writable(true);

// Pour le mode nuit
export const isChecked = writable(false);

// Pour suivre la section active
export const activeSection = writable(null);
