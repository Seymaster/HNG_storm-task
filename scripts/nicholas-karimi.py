#!/usr/bin/env python3


"""A python script that prints my name and
    HNGi7 internship ID."""

def get_intern_details(firstName, lastName, intern_id,language, email):

    return "Hello world, this is {} {}, with HNGi7 ID {} and using {} for stage two task.{} ".format(firstName, lastName, intern_id, language, email)


print(get_intern_details("Nicholas", "Karimi", "HNG-04333", "Python", "nicholaskarimi.dev@gmail.com"))