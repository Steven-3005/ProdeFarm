-- Listar todos los registros por USUARIOes
CREATE PROCEDURE SP_L_USUARIO_01
@SUC_ID INT
AS
BEGIN
	SELECT * FROM TM_USUARIO
	WHERE 
	@SUC_ID = @SUC_ID
	AND EST = 1
END


--Obtener registro por ID
CREATE PROCEDURE SP_L_USUARIO_02
@USU_ID INT
AS
BEGIN
	SELECT * FROM TM_USUARIO
	WHERE 
	USU_ID = @USU_ID
END

--Eliminar registro
CREATE PROCEDURE SP_D_USUARIO_01
@USU_ID INT
AS
BEGIN
	UPDATE TM_USUARIO
	SET
		EST = 0
	WHERE
		USU_ID = @USU_ID
END


--Insetar nuevo regitro
CREATE PROCEDURE SP_I_USUARIO_01
@SUC_ID INT,
@USU_CORREO VARCHAR (150),
@USU_NOM VARCHAR (150),
@USU_APE VARCHAR (150),
@USU_CI VARCHAR (150),
@USU_TELF VARCHAR (150),
@USU_PASS VARCHAR (150),
@ROL_ID INT
AS
BEGIN
	INSERT INTO TM_USUARIO
	(SUC_ID, USU_CORREO, USU_NOM, USU_APE, USU_CI, USU_TELF, USU_PASS, ROL_ID, FECH_CREA, EST)
	VALUES
	(@SUC_ID, @USU_CORREO, @USU_NOM, @USU_APE, @USU_CI, @USU_TELF, @USU_PASS, @ROL_ID, GETDATE(),1)
	
END

--Actualizar regitro
CREATE PROCEDURE SP_U_USUARIO_01
@USU_ID INT,
@SUC_ID INT,
@USU_CORREO VARCHAR (150),
@USU_NOM VARCHAR (150),
@USU_APE VARCHAR (150),
@USU_CI VARCHAR (150),
@USU_TELF VARCHAR (150),
@USU_PASS VARCHAR (150),
@ROL_ID INT
AS
BEGIN
	UPDATE TM_USUARIO
	SET
		SUC_ID = @SUC_ID
		USU_CORREO = @USU_CORREO
		USU_NOM = @USU_NOM
		USU_APE = @USU_APE
		USU_CI = @USU_CI
		USU_TELF = @USU_TELF
		USU_PASS = @USU_PASS
		ROL_ID = @ROL_ID
	WHERE
		@USU_ID = @USU_ID
END

--ACCESO DE USUARIO
CREATE PROCEDURE SP_L_USUARIO_03
@USU_CORREO VARCHAR (150),
@USU_PASS VARCHAR (150)
AS
BEGIN
	SELECT * FROM TM_USUARIO
	WHERE 
	USU_CORREO = @USU_CORREO
	AND USU_PASS = @USU_PASS
	AND EST = 1
END

--CAMBIO DE CONTRASEŅA
CREATE PROCEDURE SP_U_USUARIO_02
@USU_ID VARCHAR (150),
@USU_PASS VARCHAR (150)
AS
BEGIN
	UPDATE TM_USUARIO
	SET 
		USU_PASS = @USU_PASS
	WHERE 
		USU_ID = @USU_ID
END