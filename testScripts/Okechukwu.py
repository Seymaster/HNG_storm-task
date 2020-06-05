def task_two(first_name, last_name, HNGi7_ID, language, email):
    return f'Hello World, this is {first_name} {last_name} with HNGi7 ID {HNGi7_ID} using {language} for stage 2 task. {email}'

if __name__ == '__main__':
    print(task_two('[Okechukwu]', '[Chukwude]', '[HNG-00814]', '[Python]', 'chukwudeokechukwu@gmail.com'), flush=True)