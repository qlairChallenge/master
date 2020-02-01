# Import libraries here!
import numpy as np
import matplotlib.pyplot as plt
import random
# First Task

# Please return the key that related to the largest value in the given dictionary
# Example: if the dictionary is {'first': 2, 'second': 908723498234, 'third': -5}
# The function should have output 'second'


def get_biggest_key(dictionary_obj):
	# Code goes here!
	#first item set as biggest
	biggest_value = list(dictionary_obj.values())[0]; 
	name_key=list(dictionary_obj.keys())[0]; 
	#loop through dict
	for key, value in dictionary_obj.items(): 
		if value>biggest_value:
			name_key=key;
			biggest_value=value;

	return name_key;

	# #if we care about menmory and dict is large
	# biggest_value = 0; 
	# name_key='';
	# index=0;
	# #loop through dict
	# for key, value in dictionary_obj.items():
	# 	if index==0:
	# 		biggest_value = value; 
	# 		name_key=key;
	# 		index=index+1;
	# 	elif value>biggest_value:
	# 		name_key=key;
	# 		biggest_value=value;

	return name_key;





# Second Task

# Please write a function that creates and plots a random generated gaussian distribution
# in as few lines as possible. Importing libraries don't count towards the number of lines
# Mean and standard deviation can be random, as long as the resulting plot doesn't skew


def plot_random_gauss(num_values=1000):
	# Code goes here!
	mean = random.randint(-1000,1000); std = random.randint(1,4);
	x = np.arange(mean-5,mean+5,10/num_values)
	f = np.exp(-np.square(x-mean)/2*np.square(std))/(np.sqrt(2*np.pi*np.square(std)))
	plt.plot(x,f);
	plt.show();


# dictionary={'first': 2, 'second': 908, 'third': -5, 'fourth': 2**10};
# print(get_biggest_key(dictionary));

# plot_random_gauss();
